<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function grid(Request $request)
    {
        $pagenum = $request->input('pagenum');
        $pagesize = $request->input('pagesize');
        $start = $pagenum * $pagesize;

        $result = $this->getGridData(
            $request->input('filterscount'),
            $request->input('sortdatafield'),
            $request->input('sortorder'),
            $pagesize,
            $start
        );

        $data = [
            'TotalRows' => $result['TotalRows'],
            'Rows' => $result['Rows'],
        ];

        return response()->json($data);
    }

    // getGridData

    public function getGridData($filterscount, $sortdatafield, $sortorder, $limit, $offset)
    {
        $where2 = ['b.sts', '!=', '0'];


        if (request()->input('investment_ac_no')) {
            $where2[] = ['b.investment_ac_no', 'like', '%' . trim(request()->input('investment_ac_no')) . '%'];
        }

        if (request()->input('case_number')) {
            $where2[] = ['b.case_number', 'like', '%' . trim(request()->input('case_number')) . '%'];
        }

        $where = [];
        if ($filterscount > 0) {
            for ($i = 0; $i < $filterscount; $i++) {
                $filtervalue = request()->input('filtervalue' . $i);
                $filtercondition = request()->input('filtercondition' . $i);
                $filterdatafield = request()->input('filterdatafield' . $i);

                // Map filterdatafield to corresponding database column
                switch ($filterdatafield) {
                    case 'e_dt':
                        $filterdatafield = 'b.e_dt';
                        break;
                    case 'doc_type':
                        $filterdatafield = 'c.name';
                        break;
                    case 'e_name':
                        $filterdatafield = 'u.name';
                        break;
                    case 'remarks':
                        $filterdatafield = 'b.remarks';
                        break;
                    default:
                        $filterdatafield = 'b.' . $filterdatafield;
                        break;
                }

                switch ($filtercondition) {
                    case "CONTAINS":
                        $where[] = [$filterdatafield, 'like', '%' . $filtervalue . '%'];
                        break;
                    case "DOES_NOT_CONTAIN":
                        $where[] = [$filterdatafield, 'not like', '%' . $filtervalue . '%'];
                        break;
                    case "EQUAL":
                        $where[] = [$filterdatafield, '=', $filtervalue];
                        break;
                    case "NOT_EQUAL":
                        $where[] = [$filterdatafield, '<>', $filtervalue];
                        break;
                    case "GREATER_THAN":
                        $where[] = [$filterdatafield, '>', $filtervalue];
                        break;
                    case "LESS_THAN":
                        $where[] = [$filterdatafield, '<', $filtervalue];
                        break;
                    case "GREATER_THAN_OR_EQUAL":
                        $where[] = [$filterdatafield, '>=', $filtervalue];
                        break;
                    case "LESS_THAN_OR_EQUAL":
                        $where[] = [$filterdatafield, '<=', $filtervalue];
                        break;
                    case "STARTS_WITH":
                        $where[] = [$filterdatafield, 'like', $filtervalue . '%'];
                        break;
                    case "ENDS_WITH":
                        $where[] = [$filterdatafield, 'like', '%' . $filtervalue];
                        break;
                }
            }
        }

        if (!$sortorder) {
            $sortdatafield = 'b.id';
            $sortorder = 'DESC';
        }

        $query = DB::table('recovery_data as b')
            ->select('b.*')
            ->leftJoin('ref_bank as bn', 'b.bank_name', '=', 'bn.id')
            ->leftJoin('ref_branch_sol as bnn', 'b.branch_name', '=', 'bnn.id')
            ->leftJoin('users_info as u', 'b.representative_user', '=', 'u.id')
            ->where($where)
            // ->where($where2)
            ->orderBy($sortdatafield, $sortorder)
            ->skip($offset)
            ->take($limit);

        $totalRows = DB::select(DB::raw('SELECT FOUND_ROWS() AS Count'))[0]->Count;

        return [
            'TotalRows' => $totalRows,
            'Rows' => $query->get(),
        ];
    }


















}
