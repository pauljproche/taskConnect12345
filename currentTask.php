<?php
    require_once('constant.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        .currTaskHeading{
            font-size: 40px;
            margin: 44px 0px;
        }
        .cardContainer {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: space-between;
            margin-right: 10px;
        }
        .taskCard {
            display: flex;
            flex-direction: column;
            width: 420px;
            height: auto;
            border-radius: 10px;
            background: #FFF;
            box-shadow: 1px 4px 7px 3px rgba(0, 0, 0, 0.25);
            padding: 13px;
            margin-right: 25px;
            margin-bottom: 5%;
        }
        .taskCardHeader {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .taskHeading {
            font-size: 29px;
        }
        .textStyle {
            color: #000;
            font-family: Inter;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .headingDate {
            font-size: 20px;
        }
        .headingEle {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            flex-grow: 1;
            align-items: center;
        }
        .headingDate {
            margin-right: 25px;
        }

        .kebab-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            width: 15px;
            height: 15px;
        }

        .dot {
            width: 3px;
            height: 3px;
            background-color: #000;
            border-radius: 50%;
        }

        /* Menu Items Styles */
        .menu-items {
            display: flex;
            flex-direction: column;
            position: absolute;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            z-index: 1;
        }

        .menu-item {
            padding: 5px;
            cursor: pointer;
        }

        .hidden {
            display: none;
        }
        .subtaskContainer {
            display: flex;
            flex-direction: column;
        }
        .subtask {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 20px;
        }
        .subTaskLeft {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 166px;
        }
        .priorityLevel {
            color: #F00;
            font-size: 20px;
            margin-right: 6px;
            width: 21px;
        }
        .checkbox {
            width: 20px;
            height: 20px;
            background: #D9D9D9;
        }
        .subTaskText {
            /* margin-right: 22px; */
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .subTaskRight {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .subTaskDate {
            margin-right: 25px;
        }
        .addTask {
            width: 105px;
            height: 98px;
            border-radius: 10px;
            background-color: #2B3A45 !important;
            box-shadow: 1px 4px 7px 3px rgba(0, 0, 0, 0.25);
            background: url(Images/addTaskPlusIcon.png) no-repeat center;
            background-size: 60px 60px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class = "currTaskHeading textStyle"><?php echo $constObj['currentTasks'];?></div>
    <div id = "cardContainer" class = "cardContainer">
        <div id = "card" class = "taskCard">
            <div class = "taskCardHeader textStyle">
                <div class = "taskHeading">Chemistry Homework</div>
                <div class = "headingEle">
                    <div class="headingDate">30 Aug 2020</div>
                    <div id="threeDotsKebabMenu" class="kebab-menu">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div id="menuItems" class="menu-items hidden">
                        <div class="menu-item">Edit Task</div>
                        <div class="menu-item">Update Task</div>
                    </div>
                </div>
            </div>
            <div class = "subtaskContainer">
                <div id = "subTask1" class = "subtask">
                    <div class = "subTaskLeft">
                        <div id = priorityLevel1 class = "textStyle priorityLevel">!!!</div>
                        <div id = subTaskText1 class = "textStyle subTaskText">
                            <label for="checkbox1">Problem 1</label>
                            <input type="checkbox" id="checkbox1" class="checkbox">
                        </div>
                    </div>
                    <div class = "subTaskRight">
                        <div id = subTaskDate1 class = "subTaskDate">Due in 1 week</div>
                        <div id="threeDotsSubTask" class="kebab-menu">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div id="subMenuItems" class="menu-items hidden">
                            <div class="menu-item">Edit Task</div>
                            <div class="menu-item">Update Task</div>
                        </div>
                    </div>
                </div>
                <div id = "subTask2" class = "subtask textStyle">
                    <div class = "subTaskLeft">
                        <div id = priorityLevel2 class = "priorityLevel">!!</div>
                        <div id = "subTaskText2" class = "subTaskText">
                            <label for="checkbox2">Problem 2</label>
                            <input type="checkbox" id="checkbox2" class="checkbox">
                        </div>
                    </div>
                    <div class = "subTaskRight">
                        <div id = subTaskDate2 class = "subTaskDate">30 Aug 2023</div>
                        <div id="threeDotsSubTask" class="kebab-menu">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div id="subMenuItems" class="menu-items hidden">
                            <div class="menu-item">Edit Task</div>
                            <div class="menu-item">Update Task</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id = "card" class = "taskCard">
            <div class = "taskCardHeader textStyle">
                <div class = "taskHeading">Chemistry Homework</div>
                <div class = "headingEle">
                    <div class="headingDate">30 Aug 2020</div>
                    <div id="threeDotsKebabMenu" class="kebab-menu">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div id="menuItems" class="menu-items hidden">
                        <div class="menu-item">Edit Task</div>
                        <div class="menu-item">Update Task</div>
                    </div>
                </div>
            </div>
            <div class = "subtaskContainer">
                <div id = "subTask1" class = "subtask">
                    <div class = "subTaskLeft">
                        <div id = priorityLevel1 class = "textStyle priorityLevel">!!!</div>
                        <div id = subTaskText1 class = "textStyle subTaskText">
                            <label for="checkbox1">Problem 1</label>
                            <input type="checkbox" id="checkbox1" class="checkbox">
                        </div>
                    </div>
                    <div class = "subTaskRight">
                        <div id = subTaskDate1 class = "subTaskDate">Due in 1 week</div>
                        <div id="threeDotsSubTask" class="kebab-menu">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div id="subMenuItems" class="menu-items hidden">
                            <div class="menu-item">Edit Task</div>
                            <div class="menu-item">Update Task</div>
                        </div>
                    </div>
                </div>
                <div id = "subTask2" class = "subtask textStyle">
                    <div class = "subTaskLeft">
                        <div id = priorityLevel2 class = "priorityLevel">!!</div>
                        <div id = "subTaskText2" class = "subTaskText">
                            <label for="checkbox2">Problem 2</label>
                            <input type="checkbox" id="checkbox2" class="checkbox">
                        </div>
                    </div>
                    <div class = "subTaskRight">
                        <div id = subTaskDate2 class = "subTaskDate">30 Aug 2023</div>
                        <div id="threeDotsSubTask" class="kebab-menu">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div id="subMenuItems" class="menu-items hidden">
                            <div class="menu-item">Edit Task</div>
                            <div class="menu-item">Update Task</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id = "card" class = "taskCard">
            <div class = "taskCardHeader textStyle">
                <div class = "taskHeading">Chemistry Homework</div>
                <div class = "headingEle">
                    <div class="headingDate">30 Aug 2020</div>
                    <div id="threeDotsKebabMenu" class="kebab-menu">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div id="menuItems" class="menu-items hidden">
                        <div class="menu-item">Edit Task</div>
                        <div class="menu-item">Update Task</div>
                    </div>
                </div>
            </div>
            <div class = "subtaskContainer">
                <div id = "subTask1" class = "subtask">
                    <div class = "subTaskLeft">
                        <div id = priorityLevel1 class = "textStyle priorityLevel">!!!</div>
                        <div id = subTaskText1 class = "textStyle subTaskText">
                            <label for="checkbox1">Problem 1</label>
                            <input type="checkbox" id="checkbox1" class="checkbox">
                        </div>
                    </div>
                    <div class = "subTaskRight">
                        <div id = subTaskDate1 class = "subTaskDate">Due in 1 week</div>
                        <div id="threeDotsSubTask" class="kebab-menu">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div id="subMenuItems" class="menu-items hidden">
                            <div class="menu-item">Edit Task</div>
                            <div class="menu-item">Update Task</div>
                        </div>
                    </div>
                </div>
                <div id = "subTask2" class = "subtask textStyle">
                    <div class = "subTaskLeft">
                        <div id = priorityLevel2 class = "priorityLevel">!!</div>
                        <div id = "subTaskText2" class = "subTaskText">
                            <label for="checkbox2">Problem 2</label>
                            <input type="checkbox" id="checkbox2" class="checkbox">
                        </div>
                    </div>
                    <div class = "subTaskRight">
                        <div id = subTaskDate2 class = "subTaskDate">30 Aug 2023</div>
                        <div id="threeDotsSubTask" class="kebab-menu">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                        <div id="subMenuItems" class="menu-items hidden">
                            <div class="menu-item">Edit Task</div>
                            <div class="menu-item">Update Task</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "addTask">

        </div>
    </div>
</body>

<script>
    document.getElementById('threeDotsKebabMenu').addEventListener('click', toggleMenu);

    function toggleMenu(event) {
            var menuItems = document.getElementById('menuItems');
            menuItems.classList.toggle('hidden');
            event.stopPropagation(); // Prevent the click event from propagating to the document
    }

    document.addEventListener('click', function (event) {
        var menuItems = document.getElementById('menuItems');
        if (!menuItems.contains(event.target)) {
            menuItems.classList.add('hidden');
        }
    });

</script>
</html>