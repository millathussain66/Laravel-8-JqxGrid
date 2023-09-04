@extends('./../includes.header')
@section('content')



<div id="container">
	<div id="body">
		<script type="text/javascript">
			jQuery(document).ready(function() {


				var theme = 'classic';
				var source = {
					datatype: "json",
					datafields: [
						{
							name: 'id',
							type: 'int'
						},
						{
							name: 'e_dt',
							type: 'string'
						},

						{
							name: 'ac_type',
							type: 'string'
						},
						{
							name: 'card_no',
							type: 'string'
						},

						{
							name: 'investment_ac_no',
							type: 'string'
						},
						{
							name: 'case_number',
							type: 'string'
						},
						{
							name: 'account',
							type: 'string'
						},
						{
							name: 'recive_date',
							type: 'string'
						},


						{
							name: 'bank_name',
							type: 'string'
						},
						{
							name: 'branch_name',
							type: 'string'
						},
						{
							name: 'po_no',
							type: 'string'
						},

						{
							name: 'cheque_no',
							type: 'string'
						},

						{
							name: 'representative_user',
							type: 'string'
						},
						{
							name: 'collection_method',
							type: 'string'
						},

						{
							name: 'doc_file',
							type: 'string'
						},
						{
							name: 'remarks',
							type: 'string'
						},
						{
							name: 'sts',
							type: 'int'
						},
						{
							name: 'v_sts',
							type: 'int'
						},
						{
							name: 'e_by',
							type: 'int'
						},
						{
							name: 'e_name',
							type: 'string'
						}
					],
					addrow: function(rowid, rowdata, position, commit) {
						commit(true);
					},
					deleterow: function(rowid, commit) {
						commit(true);
					},
					updaterow: function(rowid, newdata, commit) {
						commit(true);
					},
					url: '{{ route("grid") }}',
					cache: false,
					filter: function() {
						// update the grid and send a request to the server.
						jQuery("#jqxgrid").jqxGrid('updatebounddata', 'filter');
					},
					sort: function() {
						// update the grid and send a request to the server.
						jQuery("#jqxgrid").jqxGrid('updatebounddata', 'sort');
					},
					root: 'Rows',
					beforeprocessing: function(data) {
		
					}

				};
				var dataadapter = new jQuery.jqx.dataAdapter(source, {
					loadError: function(xhr, status, error) {
						alert(error);
					},
					formatData: function(data) {
						var investment_ac_no = jQuery.trim(jQuery('input[name=investment_ac_no]').val());
						var case_number = jQuery.trim(jQuery('input[name=case_number]').val());


						jQuery.extend(data, {
							investment_ac_no: investment_ac_no,
							case_number: case_number
						});
						return data;
					}
				});
				var columnCheckBox = null;
				var updatingCheckState = false;
				// initialize jqxGrid. Disable the built-in selection.
				var celledit = function(row, datafield, columntype) {
					var checked = jQuery('#jqxgrid').jqxGrid('getcellvalue', row, "available");
					if (checked == false) {
						return false;
					};
				};
				var win_h = jQuery(window).height() - 200;
				jQuery("#jqxgrid").jqxGrid({
					width: '100%',
					height: win_h,
					source: dataadapter,
					theme: theme,
					filterable: true,
					sortable: true,
					//autoheight: true,
					pageable: true,
					virtualmode: true,
					editable: true,
					enablehover: true,
					enablebrowserselection: true,
					selectionmode: 'none',
					rendergridrows: function(obj) {
						return obj.data;
					},

					columns: [
                        {
							text: 'Id',
							datafield: 'id',
							hidden: true,
							editable: false,
							width: '4%'
						},
						{
							text: 'sts',
							datafield: 'sts',
							hidden: true
						},
						{
							text: 'e_by',
							datafield: 'e_by',
							hidden: true
						},
                        {
								text: 'D',
								menu: false,
								datafield: 'Edit',
								align: 'center',
								editable: false,
								sortable: false,
								width: '2%',
								cellsrenderer: function(row) {
									editrow = row;
									var dataRecord = jQuery("#jqxgrid").jqxGrid('getrowdata', editrow);

								}
						},


						{
							text: 'Proposed Type',
							datafield: 'ac_type',
							editable: false,
							width: '10%',
							align: 'left',
						},
						{
							text: 'Investment A/C Number',
							datafield: 'investment_ac_no',
							editable: false,
							width: '13%',
							align: 'left',
						},
						{
							text: 'Card No',
							datafield: 'card_no',
							editable: false,
							width: '10%',
							align: 'left',
						},

						{
							text: 'Case Number',
							datafield: 'case_number',
							editable: false,
							width: '10%',
							align: 'left',
						},
						{
							text: 'Amount',
							datafield: 'account',
							editable: false,
							width: '10%',
							align: 'left',
						},
						{
							text: 'Receive date',
							datafield: 'recive_date',
							editable: false,
							width: '10%',
							align: 'left',
						},
						{
							text: 'Collection Methods',
							datafield: 'collection_method',
							editable: false,
							width: '10%',
							align: 'left',
						},

						{
							text: 'Bank Name ',
							datafield: 'bank_name',
							editable: false,
							width: '10%',
							align: 'left',
						},
						{
							text: 'Branch Name',
							datafield: 'branch_name',
							editable: false,
							width: '10%',
							align: 'left',
						},
						{
							text: 'PO NO',
							datafield: 'po_no',
							editable: false,
							width: '10%',
							align: 'left',
						},

						{
							text: 'Cheque No',
							datafield: 'cheque_no',
							editable: false,
							width: '10%',
							align: 'left',
						},



						{
							text: 'Representative',
							datafield: 'representative_user',
							editable: false,
							width: '10%',
							align: 'left',
						},

						{
							text: 'Remarks',
							datafield: 'remarks',
							editable: false,
							width: '15%',
							align: 'left',
						},
					]
				});

				jQuery("#details").jqxWindow({
					theme: theme,
					maxWidth: '100%',
					maxHeight: '100%',
					width: 700,
					height: 250,
					resizable: false,
					isModal: true,
					autoOpen: false,
					cancelButton: jQuery("#codeOK")
				});
			});

			function search_data() {
				jQuery("#jqxgrid").jqxGrid('updatebounddata');
				return;
			}
		</script>


		<div id="jqxgrid" style="margin: 10px auto;"></div>


		<!-- Modal for product details -->
		<div id="details" style="visibility:hidden;">
			<div style="padding-left: 17px"><strong>CMA Details</strong></div>
			<div style="">
				<table style="width: 100%;" id="preview_table">
					<tbody>
						<tr>
							<td width="50%" align="left"><strong>A/C :</strong> <label name="ac" id="ac"></label></td>
							<td width="50%" align="left"><strong>A/C Name:</strong> <label name="ac_name" id="ac_name"></label></td>
						</tr>
						<tr>
							<td width="50%" align="left"><strong>AM Name :</strong> <label name="am_name" id="am_name"></label></td>
							<td width="50%" align="left"><strong>Type of Requisition :</strong> <label name="req_type" id="req_type"></label></td>
						</tr>
						<tr>
							<td width="50%" align="left"><strong>Remarks :</strong> <label name="remarks" id="remarks"></label></td>
							<td width="50%" align="left"><strong>Initiate By :</strong> <label name="iniate_by" id="iniate_by"></label></td>
						</tr>
						<tr>
							<td width="50%" align="left"><strong>Initiate Date Time :</strong> <label name="iniate_date" id="iniate_date"></label></td>
							<td width="50%" align="left"><strong>Reject Reason :</strong> <label name="rr_reson" id="rr_reson"></label></td>
						</tr>
					</tbody>

				</table>
				<br>
				<div align="center">
					<input type="button" id="codeOK" value="Close" />

				</div>
			</div>
		</div>




@endsection

