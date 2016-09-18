<div class="panel" hidden="" id="search_book" >
    
    <h2>Search</h2>
    <div class="cleaner h30"></div>
    <div id="Search_main">
        <form>
            <table cellpadding="8" class="table-striped table-hover table-bordered">
                <tr >
                    <th >
                        <label for="author2" >Key-Words</label>
                    </th>
                    <td >
                        <input type="text" id="author_field"  name="author" class="required input_field" />
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="book">In </label>
                    </th>
                    <td>
                        <input type="hidden" name="choice" id="choice_h" value="all">
                        <button class="dropdown_list_drop"   type="button" onfocus="">
                            <div style="text-align: right; background-color: white;"  onblur="hide('choice_list')" onclick="show('choice_list')" id="choice_field">
                                
                                <span class="sr-only" id="choice_fields"   style="text-align: left;">ALL</span>
                                <span class="caret"></span>
                            </div>
                        </button>                
                        <div class="suggester">
                            <ul class="resultee" hidden=""  id="choice_list" style="list-style: none; text-align: right; width: 229px; margin-top: 0 b">
                                <li class="list_li_drop" onclick="select_li('All','choice_fields','choice_list','choice_h')">All</li>
                                <li class="list_li_drop" onclick="select_li('Book Name','choice_fields','choice_list','choice_h')">Book Name</li>
                                <li class="list_li_drop" onclick="select_li('Author','choice_fields','choice_list','choice_h')">Author</li>
                                <li class="list_li_drop" onclick="select_li('Field','choice_fields','choice_list','choice_h')">Field</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="edition">Limit Your Search</label>
                    </th>
                    <td>
                        <input type="hidden" name="qchoice" id="qchoice_h" value="Starts With">
                        <button class="dropdown_list_drop"   type="button" >
                            <div style="text-align: right;" onblur="hide('qchoice_list')" onclick="show('qchoice_list')" id="choice_field">
                                
                                <span class="sr-only" id="qchoice_fields"   style="text-align: left;">Starts With</span>
                                <span class="caret"></span>
                            </div>
                        </button>                
                        <div class="suggester">
                            <ul class="resultee" hidden=""  id="qchoice_list" style="list-style: none; text-align: right; width: 229px; margin-top: 0">
                                <li class="list_li_drop" onclick="select_li('Starts With','qchoice_fields','qchoice_list','qchoice_h')">Starts With</li>
                                <li class="list_li_drop" onclick="select_li('Ends With','qchoice_fields','qchoice_list','qchoice_h')">Ends With</li>
                                <li class="list_li_drop" onclick="select_li('Contain Words','qchoice_fields','qchoice_list','qchoice_h')">Contain Words</li>
                                <li class="list_li_drop" onclick="select_li('Exact Phrase','qchoice_fields','qchoice_list','qchoice_h')">Exact Phrase</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div>                
                            <input type="button" class="submit_btn float_r" onclick="search_book()" name="submit" id="submit" value="Search" />
                        </div>
                    </td>
                </tr> 
            </table>
        </form>
    </div>
    <div id="search_down12" hidden="">
        <div  id="search_down1" style="overflow: auto;width: 445px; height: 465px;">
            
        
        </div>
        <div  id="search_down2" hidden="" style="overflow: auto;width: 445px; height: 465px;">
        
        </div>
    </div>
</div> 
			