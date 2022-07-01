<?php
session_start();
if (!isset($_SESSION["isLoggedin"])) {
    header('Location: ./index.php');
}
?>
<?php include 'partials/header.php' ?>

 
<?php include './partials/loggedin-header.php' ?>
<!------------------ header section end ------------------------>

<section>
    <div class="container">
        <div class="row">
            <?php include 'partials/sidebar.php' ?>
            <div class="col-12 col-md-9 col-lg-9">
                <div class="right-site">
                    <h4>Add a New Page > Add Single Page</h4>
                </div>
                <form action="./auth/page-handler.php" method="POST">
                    <div class="main-form- active">
                        <div class="form-header">
                            <h4>Web Page Creator</h4>
                        </div>
                        <div>
                            <div class="single-filed">
                                <h5>Select Country</h5>
                                <div class="right">
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="single-filed">
                                <h5>State Name</h5>
                                <div class="right">
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="single-filed">
                                <h5>City Name</h5>
                                <div class="right">
                                    <input type="text" />
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
                                <div class="right">
                                    <div class="tag-box" id="dropDown2Container" onclick="toggleDropDown(event , 'dropDown2')">
                                        <!-- <span class="tag-single">
                                                <i class="fa-solid fa-xmark"></i> &nbsp; Web design
                                            </span>
                                            <span class="tag-single">
                                                <i class="fa-solid fa-xmark"></i> &nbsp; Email
                                                Marketing
                                            </span> -->
                                    </div>
                                    <ul class="CustomDropDown" id="dropDown2">
                                        <li>Web Design</li>
                                        <li>Email Marketing</li>
                                        <li>SEO</li>
                                    </ul>
                                    <h3 class="text-center mt-2">Or</h3>
                                    <div class="check">
                                        <input type="checkbox" />
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
                                            <select name="" id="">
                                                <option>Select one</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner First Name</h5>
                                        <div class="right">
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Last Name</h5>
                                        <div class="right">
                                            <input type="text" />
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
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Email</h5>
                                        <div class="right">
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Address</h5>
                                        <div class="right">
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>About Partner Descriptions</h5>
                                        <div class="right">
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="single-filed">
                                        <h5>Partner Linkedln Link</h5>
                                        <div class="right">
                                            <input type="text" />
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
                    <a href="<?="./auth/logout.php"?>">
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
</script>