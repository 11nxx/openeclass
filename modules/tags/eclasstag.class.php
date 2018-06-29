<?php

/* ========================================================================
 * Open eClass
 * E-learning and Course Management System
 * ========================================================================
 * Copyright 2003-2018  Greek Universities Network - GUnet
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

require_once 'modules/tags/moduleElement.class.php';

class eClassTag {

    private $id;
    private $name;

    public function __construct($name = '') {
        $this->name = canonicalize_whitespace($name);
    }
    public function getID() {
        return $this->id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public static function tagInput($id = null) {
        global $langTags, $head_content, $course_code;

        // Tags saved in session due to form error
        if (Session::has('tags')) {
            $tags_init = Session::get('tags');
        } elseif ($id) {
            // initialize the tags from existing module element
            $moduleTag = new ModuleElement($id);
            $tags_init = array_values($moduleTag->getTags());
        } else {
            $tags_init = [];
        }
        $answer = json_encode(array_map(function ($tag) {
            return ['id' => $tag, 'text' => $tag, 'selected' => true];
        }, $tags_init));
        $head_content .= "
            <script>
                $(function () {
                    $('#tags').select2({
                            data: $answer,
                            minimumInputLength: 2,
                            tags: true,
                            tokenSeparators: [','],
                            width: '100%',
                            selectOnClose: true,
                            createSearchChoice: function(term, data) {
                              if ($(data).filter(function() {
                                return this.text.localeCompare(term) === 0;
                              }).length === 0) {
                                return {
                                  id: term,
                                  text: term
                                };
                              }
                            },
                            ajax: {
                                url: '../tags/feed.php',
                                dataType: 'json',
                                processResults: function(data, page) {
                                    return {results: data};
                                }
                            }
                    });
                });
            </script>";
        $input_field = "
                <div class='form-group'>
                    <label for='tags' class='col-sm-2 control-label'>$langTags:</label>
                    <div class='col-sm-10'>
                        <select id='tags' class='form-control' name='tags[]' multiple>
                        </select>
                    </div>
                </div>
        ";
        return $input_field;
    }
    public function findOrCreate() {
       if ($this->name){
            if ($tag = $this->exists()) {
                $this->id = $tag->id;
                return $this->id;
            } else {
                $this->id = Database::get()->query("INSERT INTO `tag` (`name`) VALUES (?s)", $this->name)->lastInsertID;
                return $this->id;
            }
       } else {
           return FALSE;
       }
    }
    private function exists() {
        $tag = Database::get()->querySingle('SELECT * FROM tag WHERE name = ?s', $this->name);
        return $tag;
    }
}
