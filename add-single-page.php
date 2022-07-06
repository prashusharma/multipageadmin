<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
include './partials/dbconnect.php';
?>
<?php include 'partials/header.php' ?>


<?php include './partials/loggedin-header.php' ?>
<!------------------ header section end ------------------------>
<style>
    .country-section .selection,
    .services .selection {
        display: block !important;
    }

    .country-section .select2-container--default .select2-selection--single,
    .services .select2-container--default .select2-selection--single {
        border-radius: unset !important;
        border: 2px solid #dadada !important;
    }

    .country-section .select2-container .select2-selection--single,
    .services .select2-container .select2-selection--single {
        height: 33px;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <?php include 'partials/sidebar.php' ?>
            <div class="col-12 col-md-9 col-lg-9">
                <div class="right-site">
                    <h4>Add a New Page > Add Single Page</h4>
                </div>
                <form action="./auth/page-handler.php" method="POST">
                    <input type="hidden" name="create_single_page" value="true">
                    <div class="main-form- active">
                        <div class="form-header">
                            <h4>Web Page Creator</h4>
                        </div>
                        <div>
                            <div class="single-filed">
                                <h5>Select Country</h5>
                                <div class="right country-section">
                                    <!-- <input type="text" name="country"/>
                                    <select name="country"></select> -->
                                    <select name="country" class="country-name form-control">
                                        <?php
                                        $country = file_get_contents("https://api.worldbank.org/v2/country/all?format=json&per_page=299");
                                        $country = json_decode($country);
                                        // print_r($country); exit();
                                        foreach ($country[1] as $country_name) {
                                        ?>
                                            <option value='<?= '["' . $country_name->iso2Code . '", "' . $country_name->name . '"]' ?>'><?= $country_name->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="single-filed">
                                <h5>State Name</h5>
                                <div class="right">
                                    <input type="text" name="state" />
                                </div>
                            </div>
                            <div class="single-filed">
                                <h5>City Name</h5>
                                <div class="right">
                                    <input type="text" name="city" />
                                </div>
                            </div>
                            <div class="single-filed">
                                <aside style="width: 40%">
                                    <h5 style="width: 100%">Select Service Page to Create</h5>
                                    <h5 style="width: 100%; color: #1cafeb">
                                        Active Template Pages
                                    </h5>
                                    <h5 style="width: 100%; color: #1cafeb; font-weight: 500">
                                        (Main, SEO, SMM)
                                    </h5>
                                </aside>
                                <div class="right services">
                                    <select name="services[]" class="country-name form-control" multiple>
                                        <option value='Web Design'>Web Design</option>
                                        <option value='Email Marketing'>Email Marketing</option>
                                        <option value='SEO'>SEO</option>
                                        <option value='Search engine marketing'>Search engine marketing</option>
                                        <option value='Social media marketing'>Social media marketing</option>
                                        <option value='Email marketing'>Email marketing</option>
                                        <option value='Graphic design Services'>Graphic design Services</option>
                                        <option value='Web Design services'>Web Design services</option>
                                        <option value='Web development services'>Web development services</option>
                                        <option value='Mobile App development services'>Mobile App development services</option>
                                    </select>
                                    <h3 class="text-center mt-2">Or</h3>
                                    <div class="check">
                                        <input type="checkbox" id="all-select" />
                                        <span>Add all available template pages</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-header selection mb-0 mt-3">
                                <h4 style="margin-right: 10px">
                                    City Select Partner status
                                </h4>
                                <div class="checkbox-tbh"></div>
                                <div id="message_tbh">
                                    <span>Partner not active</span>
                                </div>
                            </div>

                            <div id="form_tbh" class="main-form-">
                                <div>
                                    <div class="single-filed">
                                        <h5>Title</h5>
                                        <div class="right">
                                            <select name="title" id="">
                                                <option selected disabled>Select title</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Dr.">Dr.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner First Name</h5>
                                        <div class="right">
                                            <input type="text" name="first_name" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Last Name</h5>
                                        <div class="right">
                                            <input type="text" name="last_name" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Image upload</h5>
                                        <div class="right">
                                            <div class="uploadFile_container">
                                                <label for="upload_form">Upload File</label>
                                                <input type="file" id="upload_form" hidden />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Phone</h5>
                                        <div class="right">
                                            <input type="text" name="phone" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Email</h5>
                                        <div class="right">
                                            <input type="text" name="email" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Address</h5>
                                        <div class="right">
                                            <input type="text" name="address" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>About Partner Descriptions</h5>
                                        <div class="right">
                                            <input type="text" name="description" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Linkedln Link</h5>
                                        <div class="right">
                                            <input type="text" name="linkedin_url" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-header selection">
                                <h4 style="margin-right: 10px">Hide Template Box</h4>
                                <div class="checkbox-tbh checkbox-tbhx"></div>
                                <div id="message_tbhx">
                                    <span>Do not hide any template</span>
                                </div>
                            </div>

                            <div id="form_tbhx" class="main-form-">
                                <div class="single-filed">
                                    <aside style="width: 40%">
                                        <h5 style="width: 100%">
                                            Select Service Page to Create
                                        </h5>
                                    </aside>
                                    <div class="right">
                                        <div class="tag-box" id="dropDown1Container" style="padding: 10px 7px; min-height: 40px; height: fit-content; position: relative;" onclick="toggleDropDown(event , 'dropDown1')">
                                            <!-- <span class="tag-single">
                                                    <i class="fa-solid fa-xmark"></i> &nbsp; Web design
                                                </span>
                                                <span class="tag-single">
                                                    <i class="fa-solid fa-xmark"></i> &nbsp; Email
                                                    Marketing
                                                </span>
                                                <span class="tag-single">
                                                    <i class="fa-solid fa-xmark"></i> &nbsp; SEO
                                                </span> -->
                                        </div>
                                        <ul class="CustomDropDown" id="dropDown1">
                                            <li>Web Design</li>
                                            <li>Email Marketing</li>
                                            <li>SEO</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-filed">
                                    <h5>Box 1 (Hide status)</h5>
                                    <div class="right form-header selection">
                                        <div class="checkbox-tbh hiddenToggle" onclick="hiddenToggle(event)" messageId="box1"></div>
                                        <div id="box1">
                                            <span>Not hidden </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filed">
                                    <h5>Box 2 (Hide status)</h5>
                                    <div class="right form-header selection">
                                        <div class="checkbox-tbh hiddenToggle" onclick="hiddenToggle(event)" messageId="box2"></div>
                                        <div id="box2">
                                            <span>Not hidden </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filed">
                                    <h5>Box 3 (Hide status)</h5>
                                    <div class="right form-header selection">
                                        <div class="checkbox-tbh hiddenToggle" onclick="hiddenToggle(event)" messageId="box3"></div>
                                        <div id="box3">
                                            <span>Not hidden </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-filed">
                                    <h5>Box 4 (Hide status)</h5>
                                    <div class="right form-header selection">
                                        <div class="checkbox-tbh hiddenToggle" onclick="hiddenToggle(event)" messageId="box4"></div>
                                        <div id="box4">
                                            <span>Not hidden </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="text-center mb-5">
                        <button class="create-website" type="submit">Create Website</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-12">
                <div class="log-out mt-5 mb-3">
                    <a href="<?= "./auth/logout.php" ?>">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------------- footer section start  -------------->
<?php include 'partials/footer.php' ?>
<script type="text/javascript">
    let darkMode = document.querySelector(".checkbox-tbh");
    let message1 = document.querySelector("#message_tbh");
    let message2 = document.querySelector("#message_tbhx");
    let form_tbh = document.getElementById("form_tbh")
    let form_tbhx = document.getElementById("form_tbhx")
    darkMode.addEventListener("click", function(e) {
        darkMode.classList.toggle("active");
        if (darkMode.classList.contains("active")) {
            message1.innerHTML = `<span style="color : #21b1ec">Partner Active</span>`;
            form_tbh.classList.add("active")
        } else {
            message1.innerHTML = `<span>Partner not active</span>`;
            form_tbh.classList.remove("active")
        }
    });
    let darkModex = document.querySelector(".checkbox-tbhx");
    darkModex.addEventListener("click", function() {
        darkModex.classList.toggle("active");
        if (darkModex.classList.contains("active")) {
            message2.innerHTML = `<span style="color : #21b1ec">Partner Active</span>`;
            form_tbhx.classList.add("active")
        } else {
            message2.innerHTML = `<span>Do not hide any template</span>`;
            form_tbhx.classList.remove("active")
        }
    });

    function hiddenToggle(e) {
        const element = e.target
        const msgid = element.getAttribute("messageId")
        const msgEle = document.getElementById(msgid)
        element.classList.toggle("active");
        if (element.classList.contains("active")) {
            msgEle.innerHTML = `<span>Hidden</span>`;
        } else {
            msgEle.innerHTML = `<span>Not Hidden</span>`;
        }
    }

    function toggleDropDown(e, name) {
        const targetElement = e.target
        if (!targetElement.classList.contains("tag-box")) {
            return
        }
        const element = document.getElementById(name);
        element.classList.toggle("active")
    }

    const dropDown1 = document.getElementById("dropDown1")
    const dropDown1item = document.querySelectorAll("#dropDown1 li")
    const dropDown1Container = document.getElementById("dropDown1Container")
    dropDown1item.forEach((element) => {
        element.addEventListener("click", (e) => {
            let dropDownChip = `<span class="tag-single"><i class="fa-solid fa-xmark" onClick="deleteChipData1('${e.target.innerHTML}')"></i> &nbsp; ${e.target.innerHTML}</span>`
            dropDown1Container.innerHTML = dropDown1Container.innerHTML + dropDownChip
            const dropDownInneritem = document.querySelectorAll("#dropDown1 li")
            dropDown1.innerHTML = ""
            dropDownInneritem.forEach((ele) => {
                if (e.target.innerHTML === ele.innerHTML) {
                    return
                }
                dropDown1.append(ele)
            })
        })
    })

    const dropDown2 = document.getElementById("dropDown2")
    const dropDown2item = document.querySelectorAll("#dropDown2 li")
    const dropDown2Container = document.getElementById("dropDown2Container")
    dropDown2item.forEach((element) => {
        element.addEventListener("click", (e) => {
            let dropDownChip = `<span class="tag-single"><i class="fa-solid fa-xmark" onClick="deleteChipData2('${e.target.innerHTML}')"></i> &nbsp; ${e.target.innerHTML}</span>`
            dropDown2Container.innerHTML = dropDown2Container.innerHTML + dropDownChip
            const dropDownInneritem = document.querySelectorAll("#dropDown2 li")
            dropDown2.innerHTML = ""
            dropDownInneritem.forEach((ele) => {
                if (e.target.innerHTML === ele.innerHTML) {
                    return
                }
                dropDown2.append(ele)
            })
        })
    })


    function deleteChipData1(value) {
        console.log(value, name)
        const element = document.getElementById("dropDown1")
        const ele = document.createElement("li")
        ele.innerHTML = value
        element.appendChild(ele)
        const dropdown1span = document.querySelectorAll("#dropDown1Container span")
        // dropDown1Container.innerHTML = ""
        dropdown1span.forEach((span, index) => {
            if (span.innerText.trim() == value) {
                dropDown1Container.removeChild(dropDown1Container.children[index])
            }
        })
    }

    function deleteChipData2(value) {
        console.log(value, name)
        const element = document.getElementById("dropDown2")
        const ele = document.createElement("li")
        ele.innerHTML = value
        element.appendChild(ele)
        const dropdown2span = document.querySelectorAll("#dropDown2Container span")
        // dropDown2Container.innerHTML = ""
        dropdown2span.forEach((span, index) => {
            if (span.innerText.trim() == value) {
                dropDown2Container.removeChild(dropDown2Container.children[index])
            }
        })
    }
    $(document).ready(function() {
        $('.country-name').select2();
        $('#all-select').click(function() {
            let madharchod = $(this);
            // console.log();
            if (madharchod.is(':checked')) {
                $.each($(madharchod.parent().siblings('.country-name')[0]).find('option'), function(indexInArray, valueOfElement) {
                    $(valueOfElement).attr("selected", "selected");
                });
            } else {
                $.each($(madharchod.parent().siblings('.country-name')[0]).find('option'), function(indexInArray, valueOfElement) {
                    $(valueOfElement).removeAttr("selected");
                });
            }

            // console.log($(madharchod.parent().siblings('.country-name')[0]).val());
            $('.country-name').trigger('change.select2');
        });
    });
</script>