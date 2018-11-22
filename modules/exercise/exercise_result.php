<?php

/* ========================================================================
 * Open eClass 
 * E-learning and Course Management System
 * ========================================================================
 * Copyright 2003-2015  Greek Universities Network - GUnet
 * A full copyright notice can be read in "/info/copyright.txt".
 * For a full list of contributors, see "credits.txt".
 *
 * Open eClass is an open platform distributed in the hope that it will
 * be useful (without any warranty), under the terms of the GNU (General
 * Public License) as published by the Free Software Foundation.
 * The full license can be read in "/info/license/license_gpl.txt".
 *
 * Contact address: GUnet Asynchronous eLearning Group,
 *                  Network Operations Center, University of Athens,
 *                  Panepistimiopolis Ilissia, 15784, Athens, Greece
 *                  e-mail: info@openeclass.org
 * ======================================================================== 
 */
include('exercise.class.php');
include('question.class.php');
include('answer.class.php');
include('userRecord.class.php');
$require_current_course = TRUE;
$guest_allowed = true;
include '../../include/baseTheme.php';
require_once 'include/lib/textLib.inc.php';
require_once 'modules/gradebook/functions.php';
require_once 'game.php';

$pageName = $langExercicesResult;
$navigation[] = array("url" => "index.php?course=$course_code", "name" => $langExercices);

// picture path
$data['picturePath'] = $picturePath = "courses/$course_code/image";
//Identifying ajax request
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && $is_editor) {
    $grade = $_POST['question_grade'];
    $question_id = $_POST['question_id'];
    $eurid = $_GET['eurId'];
    Database::get()->query("UPDATE exercise_answer_record
                SET weight = ?f WHERE eurid = ?d AND question_id = ?d",
        $grade, $eurid, $question_id);
    $ungraded = Database::get()->querySingle("SELECT COUNT(*) AS count
        FROM exercise_answer_record WHERE eurid = ?d AND weight IS NULL",
        $eurid)->count;
    if ($ungraded == 0) {
        // if no more ungraded quastions, set attempt as complete and
        // recalculate sum of grades
        Database::get()->query("UPDATE exercise_user_record
            SET attempt_status = ?d,
                total_score = (SELECT SUM(weight) FROM exercise_answer_record
                                    WHERE eurid = ?d)
            WHERE eurid = ?d",
            ATTEMPT_COMPLETED, $eurid, $eurid);
        $data = Database::get()->querySingle("SELECT eid, uid, total_score, total_weighting FROM exercise_user_record WHERE eurid = ?d", $eurid);
        // update gradebook            
        update_gradebook_book($data->uid, $data->eid, $data->total_score/$data->total_weighting, GRADEBOOK_ACTIVITY_EXERCISE);
    } else {
        // else increment total by just this grade
        Database::get()->query("UPDATE exercise_user_record
            SET total_score = total_score + ?f WHERE eurid = ?d",
            $grade, $eurid);
    }
    $eur = Database::get()->querySingle("SELECT * FROM exercise_user_record WHERE eurid = ?d", $eurid);
    triggerGame($course_id, $uid, $eur->eid);
    exit();
}
require_once 'include/lib/modalboxhelper.class.php';
require_once 'include/lib/multimediahelper.class.php';
ModalBoxHelper::loadModalBox();

load_js('tools.js');

<<<<<<< mine

if (isset($_GET['eurId'])) {
    $data['eurid'] = $eurid = $_GET['eurId'];
    $exercise_user_record = new userRecord();
    $exercise_user_record->find($eurid);
    $data['exercise_user_record'] = $exercise_user_record;
    $exercise_question_ids = Database::get()->queryArray("SELECT DISTINCT question_id, answer_record_id
                                                         FROM exercise_answer_record WHERE eurid = ?d
                                                         ORDER BY answer_record_id", $eurid);
    $data['user'] = $user = Database::get()->querySingle("SELECT * FROM user WHERE id = ?d", $exercise_user_record->uid);
    if (!$exercise_user_record) {
        //No record matches with this exercise user record id
        Session::Messages($langExerciseNotFound);
        redirect_to_home_page('modules/exercise/index.php?course='.$course_code);
    }
    if (!$is_editor && $exercise_user_record->uid != $uid || $exercise_user_record->attempt_status == ATTEMPT_PAUSED) {
       // student is not allowed to view other people's exercise results
       // Nobody can see results of a paused exercise       
       redirect_to_home_page('modules/exercise/index.php?course='.$course_code);
    }
    $exercise = $exercise_user_record->exercise;
} else {
    //exercise user recird id is not set
    redirect_to_home_page('modules/exercise/index.php?course='.$course_code);
}
if ($is_editor && $exercise_user_record->attempt_status == ATTEMPT_PENDING) {
$head_content .= "<script type='text/javascript'>
    		$(document).ready(function(){
                    function save_grade(elem){
                        var grade = parseFloat($(elem).val());
                        var element_name = $(elem).attr('name');
                        var questionId = parseInt(element_name.substring(14,element_name.length - 1));
                        var questionMaxGrade = parseFloat($(elem).next().val());
                        if (grade > questionMaxGrade) {
                            bootbox.alert('$langGradeTooBig');
                            return false;
                        } else if (isNaN(grade)){
                            $(elem).css({'border-color':'red'});
                            return false;
                        } else {
                            $.ajax({
                              type: 'POST',
                              url: '',
                              data: {question_grade: grade, question_id: questionId},
                            });
                            $(elem).parent().prev().hide();
                            $(elem).prop('disabled', true);
                            $(elem).css({'border-color':'#dfdfdf'});
                            var prev_grade = parseFloat($('span#total_score').html());
                            var updated_grade = prev_grade + grade;
                            $('span#total_score').html(updated_grade);
                            return true;
                        }
                    }
                    $('.questionGradeBox').keyup(function (e) {
                        if (e.keyCode == 13) {
                            save_grade(this);
                            var countnotgraded = $('input.questionGradeBox').not(':disabled').length;
                            if (countnotgraded == 0) {
                                $('a#submitButton').hide();
                                $('a#all').hide();
                                $('a#ungraded').hide();
                                $('table.graded').show('slow');
                            }
                        }
                    });
                    $('a#submitButton').click(function(e){
                        e.preventDefault();
                        var success = true;
                        $('.questionGradeBox').each(function() {
                           success = save_grade(this);
                        });
                        if (success) {
                         $(this).parent().hide();
                        }
                    });
                    $('a#ungraded').click(function(e){
                        e.preventDefault();
                        $('a#all').removeClass('btn-primary').addClass('btn-default');
                        $(this).removeClass('btn-default').addClass('btn-primary');
                        $('table.graded').hide('slow');
                    });
                    $('a#all').click(function(e){
                        e.preventDefault();
                        $('a#ungraded').removeClass('btn-primary').addClass('btn-default');
                        $(this).removeClass('btn-default').addClass('btn-primary');
                        $('table.graded').show('slow');
                    });
                });
                </script>";
}
$data['exercise'] = $exercise;


$userAttempts = Database::get()->querySingle("SELECT COUNT(*) AS count FROM exercise_user_record WHERE eid = ?d AND uid= ?d", $exercise_user_record->eid, $uid)->count;

$cur_date = new DateTime("now");
$end_date = new DateTime($exercise->selectEndDate());

$data['showResults'] = $showResults = $exercise->results == 1
               || $is_editor
               || $exercise->results == 3 && $exercise->attemptsAllowed == $userAttempts
               || $exercise->results == 4 && $end_date < $cur_date;

$data['showScore'] = $showScore = $exercise->score == 1
            || $is_editor
            || $exercise->score == 3 && $exercise->attemptsAllowed == $userAttempts
            || $exercise->score == 4 && $end_date < $cur_date;

$data['questions'] = $exercise_user_record->questions();

view('modules.exercise.exercise_results', $data);
exit();
//
//
//// for each question
//if (count($exercise_question_ids)>0){
//    foreach ($exercise_question_ids as $row) {
//
//        // creates a temporary Question object
//        $objQuestionTmp = new Question();
//        $is_question = $objQuestionTmp->read($row->question_id);
//        // gets the student choice for this question
//        $choice = $objQuestionTmp->get_answers_record($eurid);
//        $questionName = $objQuestionTmp->selectTitle();
//        $questionDescription = $objQuestionTmp->selectDescription();
//        $questionDescription_temp = nl2br(make_clickable($questionDescription));
//        $questionDescription_temp = mathfilter($questionDescription_temp, 12, "../../courses/mathimg/");
//        $questionWeighting = $objQuestionTmp->selectWeighting();
//        $answerType = $objQuestionTmp->selectType();
//
//        // destruction of the Question object
//        unset($objQuestionTmp);
//        //check if question has been graded
//        $question_weight = Database::get()->querySingle("SELECT SUM(weight) AS weight FROM exercise_answer_record WHERE question_id = ?d AND eurid =?d", $row->question_id, $eurid)->weight;
//        $question_graded = is_null($question_weight) ? FALSE : TRUE;
//
//        if ($answerType == UNIQUE_ANSWER || $answerType == MULTIPLE_ANSWER || $answerType == TRUE_FALSE) {
//            $colspan = 4;
//        } elseif ($answerType == MATCHING) {
//            $colspan = 2;
//        } else {
//            $colspan = 1;
//        }
//        $iplus = $i + 1;
//        $tool_content .= "
//            <table class='table-default ".(($question_graded)? 'graded' : 'ungraded')."'>
//            <tr class='active'>
//              <td colspan='${colspan}'><b><u>$langQuestion</u>: $iplus</b></td>
//            </tr>
//            <tr>
//              <td colspan='${colspan}'>";
//        if ($is_question) {
//            $tool_content .= "
//                <b>" . q_math($questionName) . "</b>
//                <br>" .
//                standard_text_escape($questionDescription_temp)
//                . "<br><br>";
//        } else {
//            $tool_content .= "<div class='alert alert-warning'>$langQuestionAlreadyDeleted</div>";
//        }
//
//        $tool_content .= "
//              </td>
//            </tr>";
//        if (file_exists($picturePath . '/quiz-' . $row->question_id)) {
//            $tool_content .= "
//                      <tr class='even'>
//                        <td class='text-center' colspan='${colspan}'><img src='../../$picturePath/quiz-" . $row->question_id . "'></td>
//                      </tr>";
//        }
//        $questionScore = 0;
//
//        if ($showResults && $choice) {
//            if ($answerType == UNIQUE_ANSWER || $answerType == MULTIPLE_ANSWER || $answerType == TRUE_FALSE) {
//                $tool_content .= "
//                            <tr class='even'>
//                              <td width='50' valign='top'><b>$langChoice</b></td>
//                              <td width='50' class='center' valign='top'><b>$langExpectedChoice</b></td>
//                              <td valign='top'><b>$langAnswer</b></td>
//                              <td valign='top'><b>$langComment</b></td>
//                            </tr>";
//            } elseif ($answerType == FILL_IN_BLANKS || $answerType == FILL_IN_BLANKS_TOLERANT || $answerType == FREE_TEXT) {
//                $tool_content .= "
//                            <tr class='active'>
//                              <td><b>$langAnswer</b></td>
//                            </tr>";
//            } else {
//                $tool_content .= "
//                            <tr class='even'>
//                              <td><b>$langElementList</b></td>
//                              <td><b>$langCorrespondsTo</b></td>
//                            </tr>";
//            }
//        }
//        if ($answerType != FREE_TEXT) { // if NOT FREE TEXT (i.e. question has answers)
//            // construction of the Answer object
//            $objAnswerTmp = new Answer($row->question_id);
//
//            for ($answerId = 1; $answerId <= $objAnswerTmp->selectNbrAnswers(); $answerId++) {
//                $answer = $objAnswerTmp->selectAnswer($answerId);
//                $answerComment = $objAnswerTmp->selectComment($answerId);
//                $answerCorrect = $objAnswerTmp->isCorrect($answerId);
//                $answerWeighting = $objAnswerTmp->selectWeighting($answerId);
//
//                // support for math symbols
//                $answer = mathfilter($answer, 12, '../../courses/mathimg/');
//                $answerComment = mathfilter($answerComment, 12, '../../courses/mathimg/');
//
//                switch ($answerType) {
//                    // for unique answer
//                    case UNIQUE_ANSWER : 
//                        $studentChoice = ($choice == $answerId) ? 1 : 0;
//                        if ($studentChoice) {
//                            $questionScore += $answerWeighting;
//                        }
//                        break;
//                    // for multiple answers
//                    case MULTIPLE_ANSWER : $studentChoice = @$choice[$answerId];
//                        if ($studentChoice) {
//                            $questionScore += $answerWeighting;
//                        }
//                        break;
//                    // for fill in the blanks
//                    case FILL_IN_BLANKS :
//                    case FILL_IN_BLANKS_TOLERANT :
//                        list($answer, $answerWeighting) = Question::blanksSplitAnswer($answer);
//                        // splits weightings that are joined with a comma
//                        $answerWeighting = explode(',', $answerWeighting);
//                        // we save the answer because it will be modified
//                        $temp = $answer;
//                        $answer = '';
//                        $j = 1;
//                        // the loop will stop at the end of the text
//                        while (1) {
//                            // quits the loop if there are no more blanks
//                            if (($pos = strpos($temp, '[')) === false) {
//                                // adds the end of the text
//                                $answer .= q($temp);
//                                break;
//                            }
//                            // adds the piece of text that is before the blank and ended by [
//                            $answer .= substr($temp, 0, $pos + 1);
//                            $temp = substr($temp, $pos + 1);
//                            // quits the loop if there are no more blanks
//                            if (($pos = strpos($temp, ']')) === false) {
//                                // adds the end of the text
//                                $answer .= q($temp);
//                                break;
//                            }
//                            $choice[$j] = canonicalize_whitespace($choice[$j]);
//                            // if the word entered is the same as the one defined by the professor
//                            $canonical_choice = $answerType == FILL_IN_BLANKS_TOLERANT ? strtr(mb_strtoupper($choice[$j], 'UTF-8'), "ΆΈΉΊΌΎΏ", "ΑΕΗΙΟΥΩ") : $choice[$j];
//                            $canonical_match = $answerType == FILL_IN_BLANKS_TOLERANT ? strtr(mb_strtoupper(substr($temp, 0, $pos), 'UTF-8'), "ΆΈΉΊΌΎΏ", "ΑΕΗΙΟΥΩ") : substr($temp, 0, $pos);
//                            $right_answers = array_map('canonicalize_whitespace',
//                                preg_split('/\s*\|\s*/', $canonical_match));
//                            if (in_array($canonical_choice, $right_answers)) {
//                                // gives the related weighting to the student
//                                $questionScore += $answerWeighting[$j-1];
//                                // increments total score
//                                // adds the word in green at the end of the string
//                                $answer .= '<b>' . q($choice[$j]) . '</b>';
//                            }
//                            // else if the word entered is not the same as the one defined by the professor
//                            elseif ($choice[$j] !== '') {
//                                // adds the word in red at the end of the string, and strikes it
//                                $answer.='<span class="text-danger"><s>' . q($choice[$j]) . '</s></span>';
//                            } else {
//                                // adds a tabulation if no word has been typed by the student
//                                $answer.='&nbsp;&nbsp;&nbsp;';
//                            }
//                            // adds the correct word, followed by ] to close the blank
//                            $answer .= ' / <span class="text-success"><b>' .
//                                q(preg_replace('/\s*,\s*/', " $langOr ", substr($temp, 0, $pos))) .
//                                '</b></span>]';
//                            $j++;
//                            $temp = substr($temp, $pos + 1);
//                        }
//                        break;
//                    // for matching
//                    case MATCHING : if ($answerCorrect) {
//                            if ($answerCorrect == $choice[$answerId]) {
//                                $questionScore += $answerWeighting;
//                                $choice[$answerId] = $matching[$choice[$answerId]];
//                            } elseif (!$choice[$answerId]) {
//                                $choice[$answerId] = '&nbsp;&nbsp;&nbsp;';
//                            } else {
//                                $choice[$answerId] = "<span class='text-danger'>
//                                                                <del>" . q($matching[$choice[$answerId]]) . "</del>
//                                                                </span>";
//                            }
//                        } else {
//                            $matching[$answerId] = $answer;
//                        }
//                        break;
//                    case TRUE_FALSE : $studentChoice = ($choice == $answerId) ? 1 : 0;
//                        if ($studentChoice) {
//                            $questionScore += $answerWeighting;
//                        }
//                        break;
//                } // end switch()
//                if ($showResults) {
//                    if ($answerType != MATCHING || $answerCorrect) {
//                        if ($answerType == UNIQUE_ANSWER || $answerType == MULTIPLE_ANSWER || $answerType == TRUE_FALSE) {
//                            $tool_content .= "
//                                                <tr class='even'>
//                                                  <td>
//                                                  <div align='center'>";
//
//                            if ($studentChoice) {
//                                $icon_choice= "fa-check-square-o";
//                            } else {
//                                $icon_choice = "fa-square-o";
//                            }
//
//                            $tool_content .= icon($icon_choice) . "</div>
//                                                </td>
//                                                <td><div align='center'>";
//
//                            if ($answerCorrect) {
//                                $icon_choice= "fa-check-square-o";
//                            } else {
//                                $icon_choice = "fa-square-o";
//                            }
//                            $tool_content .= icon($icon_choice)."</div>";
//                            $tool_content .= "
//                                                </td>
//                                                <td>" . standard_text_escape($answer) . "</td>
//                                                <td>";
//                            if ($studentChoice) {
//                                $tool_content .= standard_text_escape(nl2br(make_clickable($answerComment)));
//                            } else {
//                                $tool_content .= '&nbsp;';
//                            }
//                            $tool_content .= "</td></tr>";
//                        } elseif ($answerType == FILL_IN_BLANKS || $answerType == FILL_IN_BLANKS_TOLERANT) {
//                            $tool_content .= "
//                                                <tr class='even'>
//                                                  <td>" . standard_text_escape(nl2br($answer)) . "</td>
//                                                </tr>";
//                        } else {
//                            $tool_content .= "
//                                                <tr class='even'>
//                                                  <td>" . standard_text_escape($answer) . "</td>
//                                                  <td>" . q($choice[$answerId]) ." / <span class='text-success'><b>" . q($matching[$answerCorrect]) . "</b></span></td>
//                                                </tr>";
//                        }
//                    }
//                } // end of if
//            } // end for()
//        } else { // If FREE TEXT type
//            $tool_content .= "<tr class='even'>
//                                 <td>" . purify($choice) . "</td>
//                              </tr>";
//        }
//        $tool_content .= "<tr class='active'>
//                            <th colspan='$colspan'>";
//        if ($answerType == FREE_TEXT) {
//            $choice = purify($choice);
//            if (!empty($choice)) {
//                if (!$question_graded) {
//                    $tool_content .= "<span class='text-danger'>$langAnswerUngraded</span>";
//                } else {
//                    $questionScore = $question_weight;
//                }
//            }
//        }
//        if ($showScore) {
//            if ($choice) {
//                if ($answerType == FREE_TEXT && $is_editor && isset($question_graded) && !$question_graded) {
//                 //show input field
//                 $tool_content .= "<span style='float:right;'>
//                                   $langQuestionScore: <input style='display:inline-block;width:auto;' type='text' class='questionGradeBox' maxlength='3' size='3' name='questionScore[$row->question_id]'>
//                                   <input type='hidden' name='questionMaxGrade' value='$questionWeighting'>
//                                   <b>/$questionWeighting</b></span>";
//                } else {
//                $tool_content .= "<span style='float:right;'>
//                                    $langQuestionScore: <b>$questionScore/$questionWeighting</b></span>";
//                }
//            } else {
//                $tool_content .= "<span style='float:right;'>
//                                    $langQuestionScore: <b>$question_weight</b></span>";
//            }
//
//        }
//        $tool_content .= "</th></tr></table>";
//        // destruction of Answer
//        unset($objAnswerTmp);
//        $i++;
//    } // end foreach()
//} else {
//    redirect_to_home_page('modules/exercise/index.php?course='.$course_code);
//}
//
//
//draw($tool_content, 2, null, $head_content);
