
<script type="text/javascript">
	$(document).ready(function() {
	  $('#education').click(function(e) {
	    e.preventDefault();
	    $('div#form-education').toggle('500');
	  });
	  $('#edukapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-education').toggle('500');
	  });
	});

	$(document).ready(function() {
	  $('#erd').click(function(e) {
	    e.preventDefault();
	    $('div#form-erd').toggle('500');
	  });
	  $('#erdkapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-erd').toggle('500');
	  });
	});

	$(document).ready(function() {
	  $('#intern').click(function(e) {
	    e.preventDefault();
	    $('div#form-intern').toggle('500');
	  });
	  $('#internkapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-intern').toggle('500');
	  });
	});

	$(document).ready(function() {
	  $('#languages').click(function(e) {
	    e.preventDefault();
	    $('div#form-languages').toggle('500');
	  });
	  $('#languageskapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-languages').toggle('500');
	  });
	});

	$(document).ready(function() {
	  $('#competencies').click(function(e) {
	    e.preventDefault();
	    $('div#form-competencies').toggle('500');
	  });
	  $('#competencieskapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-competencies').toggle('500');
	  });
	});

	$(document).ready(function() {
	  $('#Certificates').click(function(e) {
	    e.preventDefault();
	    $('div#form-Certificates').toggle('500');
	  });
	  $('#Certificateskapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-Certificates').toggle('500');
	  });
	});

	$(document).ready(function() {
	  $('#referance').click(function(e) {
	    e.preventDefault();
	    $('div#form-referance').toggle('500');
	  });
	  $('#referancekapa').click(function(e) {
	    e.preventDefault();
	    $('div#form-referance').toggle('500');
	  });
	});
</script>



		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			
			 // START AND FINISH DATE
			$('#startdate').datepicker({
			    dateFormat: 'dd.mm.yy',
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onSelect: function (selectedDate) {
			        $('#finishdate').datepicker('option', 'minDate', selectedDate);
			    }
			});
			$('#finishdate').datepicker({
			    dateFormat: 'dd.mm.yy',
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onSelect: function (selectedDate) {
			        $('#startdate').datepicker('option', 'maxDate', selectedDate);
			    }
			});
		
			 // Date Range Picker
			$("#from").datepicker({
			    defaultDate: "+1w",
			    changeMonth: true,
			    numberOfMonths: 3,
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onClose: function (selectedDate) {
			        $("#to").datepicker("option", "maxDate", selectedDate);
			    }
		
			});
			$("#to").datepicker({
			    defaultDate: "+1w",
			    changeMonth: true,
			    numberOfMonths: 3,
			    prevText: '<i class="fa fa-chevron-left"></i>',
			    nextText: '<i class="fa fa-chevron-right"></i>',
			    onClose: function (selectedDate) {
			        $("#from").datepicker("option", "minDate", selectedDate);
			    }
			});

		$('#exp').click(function() {
		
				$.smallBox({
					title : "Experience Information Updated...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})
		
		$("#exp-del").click(function(e) {
			e.preventDefault();
			var url = $(this).attr('href');
				$.SmartMessageBox({
					title : "Do you want to delete!",
					content : "Warning: You will delete your information",
					buttons : '[No][Yes]'
				}, function(ButtonPressed) {
					if (ButtonPressed === "Yes") {
		                $.ajax({
		                    url: url,
		                    type: 'DELETE',
		                    success: function(result) {
		                        $.smallBox({
									title : "Your information has been deleted",
									content : "<i class='glyphicon glyphicon-trash'></i> <i>Experience was deleted...</i>",
									color : "#C46A69",
									iconSmall : "fa fa-check fa-2x fadeInRight animated",
									timeout : 5000
								});
								window.location.reload();
		                    }
		                });
					
					}
					if (ButtonPressed === "No") {
						$.smallBox({
							title : "Was canceled",
							content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
							color : "#659265",
							iconSmall : "fa fa-times fa-2x fadeInRight animated",
							timeout : 5000
						});
					}
		
				});
				e.preventDefault();
			});

		$('#edu').click(function() {
		
				$.smallBox({
					title : "Training Information Updated...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})

		$("#edu-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Education was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload();
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});

		$('#interna').click(function() {
		
				$.smallBox({
					title : "Internship Information Updated...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})

		$("#intern-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Internship was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload();
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});

		$('#foreigna').click(function() {
		
				$.smallBox({
					title : "Foreign Languages Information Updated...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})

		$("#foreign-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Languages was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload();
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});
		$('#competency').click(function() {
		
				$.smallBox({
					title : "Competency Information Added...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})

		$("#competency-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Competency was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload();
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});

		$('#certi').click(function() {
		
				$.smallBox({
					title : "Certificates Information Added...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})

		$("#certi-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Certificates was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload();
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});

		$('#refe').click(function() {
		
				$.smallBox({
					title : "Referances Added...",
					content : "<i class='fa fa-clock-o'></i> <i>2 seconds ago...</i>",
					color : "#296191",
					iconSmall : "fa fa-thumbs-up bounce animated",
					timeout : 4000
				});
		
			})

		$("#refe-del").click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
						$.SmartMessageBox({
							title : "Do you want to delete!",
							content : "Warning: You will delete your information",
							buttons : '[No][Yes]'
						}, function(ButtonPressed) {
							if (ButtonPressed === "Yes") {
				                $.ajax({
				                    url: url,
				                    type: 'DELETE',
				                    success: function(result) {
				                        $.smallBox({
											title : "Your information has been deleted",
											content : "<i class='glyphicon glyphicon-trash'></i> <i>Referances was deleted...</i>",
											color : "#C46A69",
											iconSmall : "fa fa-check fa-2x fadeInRight animated",
											timeout : 5000
										});
										window.location.reload();
				                    }
				                });
							
							}
							if (ButtonPressed === "No") {
								$.smallBox({
									title : "Was canceled",
									content : "<i class='glyphicon glyphicon-ok'></i> <i>You pressed No...</i>",
									color : "#659265",
									iconSmall : "fa fa-times fa-2x fadeInRight animated",
									timeout : 5000
								});
							}
				
						});
						e.preventDefault();
					});
	
		})

		</script>
