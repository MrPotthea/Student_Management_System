<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
:root {
  --primary-color: #3498db;
  --secondary-color: #2980b9;
  --accent-color: #e74c3c;
  --light-color: #ecf0f1;
  --dark-color: #2c3e50;
}

body {
  color: #34495e;
  background: #f8f9fa;
  font-family: 'Varela Round', sans-serif;
  font-size: 14px;
  line-height: 1.6;
}

.table-responsive {
  margin: 30px 0;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  border-radius: 10px;
  overflow: hidden;
}

.table-wrapper {
  background: #fff;
  padding: 0;
  border-radius: 10px;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.table-title {
  padding-bottom: 15px;
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
  color: #fff;
  padding: 20px 30px;
  margin: 0;
  border-radius: 10px 10px 0 0;
}

.table-title h2 {
  margin: 0;
  font-size: 28px;
  font-weight: 600;
  letter-spacing: 0.5px;
}

.table-title .btn {
  color: #fff;
  float: right;
  font-size: 14px;
  font-weight: 500;
  border: none;
  min-width: 120px;
  border-radius: 50px;
  margin-left: 15px;
  transition: all 0.3s;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.table-title .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
}

.table-title .btn span {
  float: left;
  margin-top: 2px;
}

table.table {
  margin-bottom: 0;
}

table.table tr th, table.table tr td {
  border-color: #e9ecef;
  padding: 15px;
  vertical-align: middle;
}

table.table tr th {
  background-color: #f8f9fa;
  font-weight: 600;
  color: var(--dark-color);
  border-top: none;
}

table.table tr td {
  color: #495057;
}

table.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(52, 152, 219, 0.05);
}

table.table-striped.table-hover tbody tr:hover {
  background-color: rgba(52, 152, 219, 0.1);
}

table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
  margin: 0 5px;
}

table.table td a {
  font-weight: bold;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
  transition: all 0.3s;
}

table.table td a.edit {
  color: #f39c12;
}

table.table td a.edit:hover {
  color: #e67e22;
}

table.table td a.delete {
  color: var(--accent-color);
}

table.table td a.delete:hover {
  color: #c0392b;
}

.pagination {
  float: right;
  margin: 15px 30px;
}

.pagination li a {
  border: none;
  font-size: 14px;
  min-width: 30px;
  min-height: 30px;
  color: #7f8c8d;
  margin: 0 3px;
  line-height: 30px;
  border-radius: 50% !important;
  text-align: center;
  padding: 0;
  transition: all 0.3s;
}

.pagination li a:hover {
  color: var(--dark-color);
  background-color: #e0e0e0;
}  

.pagination li.active a, .pagination li.active a.page-link {
  background: var(--primary-color);
  color: white;
}

.pagination li.active a:hover {        
  background: var(--secondary-color);
}

.hint-text {
  float: left;
  margin-top: 15px;
  font-size: 14px;
  color: #7f8c8d;
}

/* Modal styles */
.modal .modal-dialog {
  max-width: 450px;
}

.modal .modal-header, .modal .modal-body, .modal .modal-footer {
  padding: 25px;
}

.modal .modal-content {
  border-radius: 10px;
  border: none;
}

.modal .modal-header {
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
  color: white;
  border-radius: 10px 10px 0 0;
}

.modal .modal-title {
  font-weight: 600;
}

.modal .close {
  color: white;
  text-shadow: none;
  opacity: 0.8;
}

.modal .close:hover {
  opacity: 1;
}

.modal .form-control {
  border-radius: 5px;
  box-shadow: none;
  border-color: #ddd;
  height: 45px;
  font-size: 14px;
}

.modal .form-control:focus {
  border-color: var(--primary-color);
  box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
}

.modal textarea.form-control {
  resize: vertical;
  min-height: 100px;
}

.modal .btn {
  border-radius: 50px;
  min-width: 120px;
  font-weight: 500;
  padding: 10px 20px;
  transition: all 0.3s;
}

.modal .btn-default {
  background: #f8f9fa;
  color: #495057;
}

.modal .btn-default:hover {
  background: #e9ecef;
}

.modal .btn-primary {
  background: var(--primary-color);
  border: none;
}

.modal .btn-primary:hover {
  background: var(--secondary-color);
}

.modal .btn-danger {
  background: var(--accent-color);
  border: none;
}

.modal .btn-danger:hover {
  background: #c0392b;
}

.department-badge {
  display: inline-block;
  padding: 5px 12px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 500;
  background-color: rgba(52, 152, 219, 0.1);
  color: var(--primary-color);
  margin-right: 5px;
  margin-bottom: 5px;
}

.action-buttons {
  display: flex;
  gap: 10px;
}

.action-buttons .btn {
  padding: 5px 10px;
  min-width: auto;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .table-title .btn {
    float: none;
    display: block;
    margin: 10px 0;
    width: 100%;
  }
  
  .table-title .btn-group {
    float: none;
    display: flex;
    flex-direction: column;
  }
  
  .table-title .btn-group .btn {
    margin: 5px 0;
    width: 100%;
  }
  
  .pagination {
    float: none;
    justify-content: center;
    display: flex;
    margin: 20px auto;
  }
  
  .hint-text {
    float: none;
    text-align: center;
    margin-bottom: 15px;
  }
}
</style>
<script>
$(document).ready(function(){
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
});
</script>
</head>
<body>
    <div class="container-xl">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>