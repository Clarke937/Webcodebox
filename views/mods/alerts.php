<script type="text/javascript" src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

<script type="text/javascript">

	function alert500()
	{
		swal
		({
			title: "Warning!",
			text: "Really you want to close the session?",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#5cb85c",
			confirmButtonText: "Accept!",
			cancelButtonText: "Cancel",
			closeOnConfirm: false,
			closeOnCancel: false 

		},function(isConfirm){
			if (isConfirm) 
			{
				location.href="sessions.php?code=500";
			}
			else
			{
				swal("Cancelled", "Let's continue", "error");  
			} 
		});
	}

	function alert501(id)
	{
		swal
		({
			title: "Attention!",
			text: "The state switched to the question answered. Continue?",
			type: "info",
			showCancelButton: true,
			confirmButtonColor: "#5cb85c",
			confirmButtonText: "Accept!",
			cancelButtonText: "Cancel",
			closeOnConfirm: false,
			closeOnCancel: false 

		},function(isConfirm){
			if (isConfirm) 
			{
				swal
				({
					title:"Status #" + id + " Changed" ,
					text: "",
					type: "success"
				},function(isConfirm){
					if(isConfirm)
					{
						location.href ="../ctrl/frm_question_status.php?id=" + id;
					}
				});
			}
			else
			{
				swal("Cancelled", "Let's continue", "error");
			} 
		});
	}

	function search()
	{
		swal
		({   
			html: true,
			title: "<i class='fa fa-search fa-3x'></i>", 
			text: "<h3>Find your friends, colleagues or programmers</h3>",   
			type: "input",   
			showCancelButton: true,   
			closeOnConfirm: false,
			animation: "pop",   
			inputPlaceholder: "Search...",
			allowOutsideClick: true

		}, function(inputValue){   
			if (inputValue === false) return false;      
			if (inputValue === "") 
			{     
				swal.showInputError("You need to write something!");     
				return false
			}
			
			location.href ="../ctrl/frm_search.php?search=" + inputValue;

		});
	}



</script>