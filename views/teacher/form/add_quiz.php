<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Quiz <small>preview</small></h1>

      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Quiz</li>
        <li>View All Quizzes</li>
        <li class="active"> Add Quiz</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" id="smaller-teacher">
     	<div class="box box-solid box-info">
		  <div class="box-header with-border">
		    <h3 class="box-title"><i class="glyphicon glyphicon-plus"></i> Add Quiz</h3>
		    
		  </div>
		  <div class="box-body">
		    <form action="" method="POST">
		    	 <div class="form-group">
				   <label for="ex_section">Section:</label><br>	
			       <select name="ex_section" id="ex_section" class=" class-route-select  btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Section</option>
				   	<option value="">R1</option>
				   	<option value="">R1</option>
				   	<option value="">R1</option>
				   </select>
				</div>
				
				<div class="form-group">
					<label for="crv_yearlvl">Year Level:</label>
			       <select name="crv_yearlvl" id="crv_yearlvl" class="btn btn-default dropdown-toggle class-route-select">
				   	<option selected disabled>Select Year Level</option>
				   	<option value="">1st Year</option>
				   	<option value="">2nd Year</option>
				    <option value="">3rd Year</option>
				    <option value="">4th Year</option>
				   </select>
				</div>
				
				<div class="form-group">
				   <label for="cr_subject">Subject:</label>
			       <select name="cr_subject" id="cr_subject" class=" class-route-select btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Subject</option>
				   	<option value="">Math36</option>
				   	<option value="">Math36</option>
				    <option value="">Math36</option>
				   </select>
				</div>
				
                 <div class="form-group">
				   <label for="cr_subject">Category:</label>
			       <select name="cr_subject" id="cr_subject" class=" class-route-select btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Category</option>
				   	<option value="">Lecture</option>
				   	<option value="">Laboratory</option>
				   </select>
				</div>

				<div class="form-group">
				   <label for="ex_section">Quiz Term:</label><br>	
			       <select name="ex_section" id="ex_section" class=" class-route-select  btn btn-default dropdown-toggle">
				   	<option selected disabled>Select Term</option>
				   	<option value="Midterm Project">Midterm Project</option>
				   	<option value="Final Project">Final Project</option>
				   </select>
				</div>	

                 <div class="form-group">
				    <label for="quiz_name">Quiz Name:</label>
				    <input type="text" class="form-control" id="quiz_name" name="quiz_name">
				</div>

				<div class="form-group">
				    <label for="t_score">Total Score:</label>
				    <input type="text" maxlength="5"  class="form-control" id="t_score" name="t_score">
				</div>
				
				<label>Date:</label>

                <div class="input-group date form-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
			  <button type="submit" class="btn btn-submit">Submit</button>
			 <a href="/e-records/teacher/quiz" class="btn btn-reset"> Back</a>

		    </form>
		  </div>
		
		</div>
    </section>
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->