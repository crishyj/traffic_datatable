<?php
  require '../include/config.php';
  session_start();
  if (isset($_SESSION['log_email'])){
        $sender_id = $_SESSION['sender_id'];
    
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
		<title>Security Traffic Log</title>
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/main.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/editor.dataTables.min.css">
		<link rel="stylesheet" href="resources/syntax/shCore.css">
		<link rel="stylesheet" href="resources/demo.css">
		<style type="text/css" class="init">
			div.container {
				max-width: 80%;
				margin: 0 auto;
			}

			th {
				text-align: left;
			}

			thead tr th:last-child::after,
			thead tr th:last-child::before{
				display: none !important;
			}

			tfoot input {
				width: 100%;
				padding: 3px;
				box-sizing: border-box;
			}

			tfoot tr .select-checkbox input{
				display: none !important;
			}

			tfoot tr th:last-child input{
				display: none !important;
			}

			#example_filter{
				display: none;
			}			

			td .fa-play{
				display: none;
			}

			.dte-inlineAdd .fa-play{
				display: block;
			}

            hr{
               height: 0 !important;
               background: none;
            }

            .h3, h3 {
                font-size: 1.75rem;
            }

            .modal{
                z-index: 1100;
            }

			@media (max-width: 1450px) {
				div.container {
					max-width: 95%;
					margin: 0 auto;
				}
			}
		</style>
	</head>

	<body class="dt-example php">
		<div class="">
            <div id="wrapper">

                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Data Entry</div>
                    </a>                 

                    <hr class="sidebar-divider">

                   
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-fw fa-wrench"></i>
                            <span>Data Entry Page</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">

                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>

                <div id="content-wrapper" class="d-flex flex-column">
                    <div id="content">
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                        aria-labelledby="searchDropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="Search for..." aria-label="Search"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small user_name">
                                            <?php echo $_SESSION['log_name'] ?>
                                        </span>
                                        <img class="img-profile rounded-circle" src="../assets/img/avatar.jpg">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">

                                        <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                        <div class="container-fluid">
                            <div class="card shadow mb-4 registerd_card">
                                <div class="card-header py-3">
                                    <h3 class="m-0 font-weight-bold text-primary">Security Traffic Log</h3>
                                </div>
                                <div class="card-body">
                                <section>
                                    <div class="demo-html">
										<table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Driver Name</th>
                                                    <th>Company Name</th>
                                                    <th>Vehicle License#</th>
                                                    <th>Destination & Purpose</th>
                                                    <th>Date In</th>
                                                    <th>Time In</th>
                                                    <th>Date Out</th>
                                                    <th>Time Out</th>
                                                    <th>Comments</th>
													<th>Creator</th>
													<th>Created</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th style="display: none;"></th>
                                                    <th>Driver Name</th>
                                                    <th>Company Name</th>
                                                    <th>Vehicle License#</th>
                                                    <th>Destination & Purpose</th>
                                                    <th>Date In</th>
                                                    <th>Time In</th>
                                                    <th>Date Out</th>
                                                    <th>Time Out</th>
                                                    <th>Comments</th>
													<th>Creator</th>
													<th>Created</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; 2021</span>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>


		
		</div>
<?php
    }
    else {
        echo "<script>
        alert('Invalid Access!');
        history.go(-1);
        </script>";
    } 
?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/PapaParse/4.6.3/papaparse.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../assets/js/sb-admin-2.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
		<script src="https://cdn.datatables.net/keytable/2.6.1/js/dataTables.keyTable.min.js"></script>
		<script src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
		<script src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
		<script src="js/dataTables.editor.min.js"></script>
		<script src="resources/syntax/shCore.js"></script>
		<script src="resources/demo.js"></script>
		<script src="resources/editor-demo.js"></script>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>


  </script>

		<script class="init">

			

			var editor; // use a global for the submit and return data rendering in the examples

			function selectColumns ( editor, csv, header ) {
				var selectEditor = new $.fn.dataTable.Editor();
				var fields = editor.order();
			
				for ( var i=0 ; i<fields.length ; i++ ) {
					var field = editor.field( fields[i] );
			
					selectEditor.add( {
						label: field.label(),
						name: field.name(),
						type: 'select',
						options: header,
						def: header[i]
					} );
				}
			
				selectEditor.create({
					title: 'Map CSV fields',
					buttons: 'Import '+csv.length+' records',
					message: 'Select the CSV column you want to use the data from for each field.'
				});
			
				selectEditor.on('submitComplete', function (e, json, data, action) {
					// Use the host Editor instance to show a multi-row create form allowing the user to submit the data.
					editor.create( csv.length, {
						title: 'Confirm import',
						buttons: 'Submit',
						message: 'Click the <i>Submit</i> button to confirm the import of '+csv.length+' rows of data. Optionally, override the value for a field to set a common value by clicking on the field below.'
					} );
			
					for ( var i=0 ; i<fields.length ; i++ ) {
						var field = editor.field( fields[i] );
						var mapped = data[ field.name() ];
			
						for ( var j=0 ; j<csv.length ; j++ ) {
							field.multiSet( j, csv[j][mapped] );
						}
					}

					editor.create(csv.length, false, null);
 
					for (var i = 0; i < fields.length; i++) {
						var field = editor.field(fields[i]);
						var mapped = data[field.name()];
					
						for (var j = 0; j < csv.length; j++) {
						field.multiSet(j, csv[j][mapped]);
						}
					}
					
					editor.submit();
				} );
			}

			$(document).ready(function () {		

				editor = new $.fn.dataTable.Editor({
					ajax: "controllers/security-traffic-log.php",
					table: "#example",
					fields: [
						{
							label: "Driver Name:",
							name: "driver_name"
						}, {
							label: "Company Name:",
							name: "company_name"
						}, {
							label: "Vehicle License#:",
							name: "vehicle_license"
						}, {
							label: "Destination & Purpose:",
							name: "destination_and_purpose"
						}, {
							label: "Date In:",
							name: "date_in",
							type: "datetime"
						}, {
							label: "Time In:",
							name: "time_in",
							type: "datetime",
							format: 'HH:mm',
							fieldInfo: '24 hour clock format'
						}, {
							label: "Date Out:",
							name: "date_out",
							type: "datetime"
						}, {
							label: "Time Out:",
							name: "time_out",
							type: "datetime",
							format: 'HH:mm',
							fieldInfo: '24 hour clock format'
						}, {
							label: "Comments:",
							name: "comments"
						}, {
							label: "Creator:",
							name: "creator"
						}
						, {
							label: "Created:",
							name: "created"
						}
					],
					
					formOptions: {
						main: {
							scope: 'cell' // Allow multi-row editing with cell selection
						}
					}
				});


    
    

				// Activate an inline edit on click of a table cell
				$('#example').on('click', 'tbody td:not(.child)', function (e) {
					// Ignore the Responsive control and checkbox columns
					if ($(this).hasClass('control') || $(this).hasClass('select-checkbox')) {
						return;
					}
					editor.inline(this);
				});

				// Inline editing in responsive cell
				$('#example').on('click', 'tbody ul.dtr-details li', function (e) {
					// Edit the value, but this selector allows clicking on label as well
					editor.inline($('span.dtr-data', this));
				});

				// Footer Search Input Field
				$('#example tfoot th').each( function () {
					var title = $(this).text();
					$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
				} );

				// Activate an inline edit on click of a table cell
				$('#example').on( 'click', 'tbody td.row-edit', function (e) {
					editor.inline( table.cells(this.parentNode, '*').nodes(), {
						submitTrigger: -1,
						submitHtml: '<i class="fa fa-play"/>'
					} );
				} );
			
				// Delete row
				$('#example').on( 'click', 'tbody td.row-remove', function (e) {
					editor.remove( this.parentNode, {
						title: 'Delete record',
						message: 'Are you sure you wish to delete this record?',
						buttons: 'Delete'
					} );
				} );

				// Upload Editor - triggered from the import button. Used only for uploading a file to the browser
				var uploadEditor = new $.fn.dataTable.Editor( {

					fields: [ {
						label: 'CSV file:',
						name: 'csv',
						type: 'upload',
						ajax: function ( files, done ) {
							// Ajax override of the upload so we can handle the file locally. Here we use Papa
							// to parse the CSV.
							Papa.parse(files[0], {
								header: true,
								skipEmptyLines: true,
								complete: function (results) {
									if ( results.errors.length ) {
										console.log( results );
										uploadEditor.field('csv').error( 'CSV parsing error: '+ results.errors[0].message );
									}
									else {
										uploadEditor.close();
										selectColumns( editor, results.data, results.meta.fields );
									}
			
									// Tell Editor the upload is complete - the array is a list of file
									// id's, which the value of doesn't matter in this case.
									done([0]);
								}
							});
						}
					} ]
				} );	


                	

				var table = $('#example').DataTable({
					initComplete: function () {
                        

						// Apply the search
						this.api().columns().every( function () {
							var that = this;			
							$( 'input', this.footer() ).on( 'keyup change clear', function () {
								if ( that.search() !== this.value ) {
									that
										.search( this.value )
										.draw();
								}
							} );
						} );
					},
					responsive: true,
					dom: 'Bfrtip',
					ajax: {
						url: 'controllers/security-traffic-log.php'
						, type: 'POST'
					},
					serverSide: true,
					order: [ 2, 'asc' ],
					keys: {
						columns: ':not(:first-child)',
						keys: [ 9 ],
						editor: editor,
						editOnFocus: true
					},
					columns: [
						// {   // Responsive control column
						// 	data: null,
						// 	defaultContent: '',
						// 	className: 'control',
						// 	orderable: false
						// },
						// {   // Checkbox select column
						// 	data: null,
						// 	defaultContent: '',
						// 	className: 'select-checkbox',
						// 	orderable: false
						// },
						{
							data: null,
							defaultContent: '',
							className: 'select-checkbox',
							orderable: false
						},
						{ data: "driver_name" },
						{ data: "company_name" },
						{ data: "vehicle_license" },
						{ data: "destination_and_purpose" },
						{ data: "date_in" },
						{ data: "time_in" },
						{ data: "date_out" },
						{ data: "time_out" },
						{ data: "comments" },
						{ data: "creator" },
						{ data: "created" },
						{
							data: null,
							defaultContent: '<i class="fa fa-play"/>',
							// className: 'row-edit dt-center',
							orderable: false
						},					
						// {
						// 	data: null,
						// 	defaultContent: '<i class="fa fa-pencil"/>',
						// 	className: 'row-edit dt-center',
						// 	orderable: false
						// },
						// {
						// 	data: null,
						// 	defaultContent: '<i class="fa fa-trash"/>',
						// 	className: 'row-remove dt-center',
						// 	orderable: false
						// },						
					],
					// autoFill: {
					// 	editor:  editor
					// },
					select: {
						style: 'os',
						selector: 'td:first-child',
						blurable: true
					},
					// select: true,
					buttons: [
						// { extend: "create", editor: editor },
						{ 
							extend: "createInline",
							editor: editor,
							formOptions: {
								submitTrigger: -1,
								submitHtml: '<i class="fa fa-play"/>'
							}
						},
						// { extend: "edit", editor: editor },
						{ extend: "remove", editor: editor },
						// {
						// 	text: 'Import CSV',
						// 	action: function () {
						// 		uploadEditor.create( {
						// 			title: 'CSV file import'
						// 		} );
						// 	}
						// },
						{
							extend: 'collection',
							text: 'Export',
							buttons: [
								'copy',
								'excel',
								'csv',
								'pdf',
							]
						},
						"selectRows",
						"selectColumns",
						"selectCells",					
						{
							extend: 'selectAll',
							className: 'btn-space'
						},
						'selectNone',
					]
				});

				$('.buttons-create').click(function(){
					let user_name = $('.user_name').text().replace(/\s+/g, '');
					
					var currentdate = new Date(); 
					var datetime = currentdate.getFullYear()+ "-"
									+ (currentdate.getMonth()+1)  + "-" 
									+ currentdate.getDate() + "  "  
									+ currentdate.getHours() + ":"  
									+ currentdate.getMinutes() + ":" 
									+ currentdate.getSeconds();
					$("#DTE_Field_creator").val(user_name);
					$("#DTE_Field_created").val(datetime);
						
				});

				$("#example > tbody > tr").each(function(index, tr) {
					let id = $(tr).attr("id");
					$(`#${id} td`).each(function(i, item) {
						console.log($(`#${id} td:nth-child(10)`).val());
						
					});
				});			
				

			});


			$(document).on("keyup", "#DTE_Field_vehicle_license", function () {
				let vehicle_license = $("#DTE_Field_vehicle_license").val();
				if (vehicle_license) {
					$("#example > tbody > tr").each(function(index, tr) {
						if ($(tr).hasClass('dte-inlineAdd')) return;

						let isFound = 0;
						let id = $(tr).attr("id");
						$(`#${id} td`).each(function(i, item) {
							// if ($(item).text() == vehicle_license)
							if ($(item).text() .indexOf(vehicle_license) >= 0) {
								let driver_name = $(`#${id} td:nth-child(2)`).text();
								let company_name = $(`#${id} td:nth-child(3)`).text();
								let destination = $(`#${id} td:nth-child(5)`).text();

								$("#DTE_Field_driver_name").val(driver_name);
								$("#DTE_Field_company_name").val(company_name);
								$('#DTE_Field_destination_and_purpose').val(destination);
								isFound = 1;
							}
						});

						if (isFound) return 0;
					});
				}
			});


            $(document).ready(function()
            {
                $(".dt-button.buttons-create span").on("click",function()
                {
                    setTimeout(function()
                    {
                        var o = $("#DTE_Field_vehicle_license");//.eq(3);
                        $(o).autocomplete(
                            {
                                source: "license_search.php?q="+$(o).val(),
                                minLength: 2,
                                select: function( event, ui )
                                {

                                    $("#DTE_Field_driver_name").val(ui.item.meta[1]);
                                    $("#DTE_Field_company_name").val(ui.item.meta[2]);
                                    $("#DTE_Field_destination_and_purpose").val(ui.item.meta[3]);
                                    $("#DTE_Field_vehicle_license").val(ui.item.value);
                                    
                                    //console.log(ui.item);
                                    event.stopPropagation();
                                    return false;
                                }
                            }
                        );  
                    },1000);
                });
            });
		</script>
	</body>

</html>