// http://toddmotto.com/mastering-the-module-pattern/
// come up with better name
var MODULE = MODULE || {};

MODULE.GradePage = {};

// code for grading page
MODULE.GradePage.init = function(){
	"use strict";
    
    // get request data to limit the students returned
    var selectLimt = 100;

    // get request data to select the level; 
    var selectLevel = 6;

    //http://rocha.la/jQuery-slimScroll
    $(function(){
        $('#students').slimScroll({
            position: 'left',
            height: '550px',
            railVisible: true,
            allowPageScroll: false,
            alwaysVisible: true
        });
    });

    //get the students names
    $.ajax({
        type: "GET",
        url: 'selectStudents.php',
        dataType: 'json',
        data: { limit: selectLimt},
        success: function(data){
            console.log("success");

            makeStudentList(data);
        },
        error:function(textStatus, errorThrown){
            console.log("error");
            console.log(errorThrown);
        }
    });

    // makes a list element per student based on json data
    // assign it to the list-group-item bootstrap class 
    function makeStudentList(data){
        // the previous hover and on click functions don't work for some reason.
        // assigning them as attributes does 

        //https://api.jquery.com/jquery.each/
        $.each(data, function(key, val){
            var $student =
            $("<li>",
            {
                id: "name",
                class: "list-group-item",
                html: val.studentName,
                click: function(){
                    var name = $(this).text();
                    console.log(name);
                    getGrades(selectLevel, name);
                },
                // http://api.jquery.com/hover/#hover1
                mouseenter: function() {
                    $(this).css({"background-color": "grey"});
                    $(this).css({"color":"lightgreen"});
                },
                mouseleave: function(){
                    $(this).css({"background-color": "white"});
                    $(this).css({"color":"black"});
                }
            },"</li>");
            
            $("#studentList").append($student);
        });
    }
    
    // get info about the grades as json, 
    // this return courseNum , courseName, grade , aLevel for the student
    function getGrades(level, name){
        // var level = level;
        $.ajax({
            type: "GET",
            url: 'selectGrades.php',
            dataType: 'json',
            // get request for student name
            data: { studentName: name, level: level},
            success: function(data){
                console.log( "Data Loaded: " , data );
                if(data.length === 0){
                    console.log(" no data");
                    // work around until we have a way to select a level
                    getGrades(level-1, name);
                    return;
                }
                // pass in json info about grades
                showStudentGrades(data);
            }
        });
    }
   
    // pass in json info about grades
    function showStudentGrades(gradeJson){
        var html = '';
        $.each(gradeJson, function(key, val){
            console.log(key);

            html += '<tr>'+
                    '<td>'+ val.courseNumber + '</td>'+
                    '<td>'+ val.courseName +'</td>'+
                    '<td>'+ val.grade + '</td>'+
                    '<td>'+ val.aLevel +'</td>'+
                    '</tr>';
            $("#gradeList").html(html);
        });
    }
};