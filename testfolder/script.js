const searchBar = document.querySelector(".search input"),
    usersList = document.querySelector(".users-list"),
    chatArea = document.querySelector(".chat-area");

searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/BackEnd/chat_organization_search_BE.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;

                document.querySelectorAll('.users-list a').forEach(link => {
                    link.onclick = (e) => {
                        e.preventDefault();
                        const outId = link.getAttribute('data-out_id');
                        const inId = link.getAttribute('data-in_id');
                        loadChat(outId, inId);
                    }
                });
            }
        }
    };
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
};

function loadChat(outId, inId) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/BackEnd/fetch_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                chatArea.innerHTML = xhr.response;

                // Initialize the chat functionality with the new chat area
                initChat(outId, inId);
            }
        }
    };
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("out_id=" + outId + "&in_id=" + inId);
}

function initChat(outId, inId) {
    const form = document.querySelector(".typing-area"),
        inputField = form.querySelector(".input-field"),
        sendBtn = form.querySelector("button"),
        chatBox = document.querySelector(".chat-box");

    form.onsubmit = (e) => {
        e.preventDefault();
    };

    inputField.focus();
    inputField.onkeyup = () => {
        if (inputField.value != "") {
            sendBtn.classList.add("active");
        } else {
            sendBtn.classList.remove("active");
        }
    };

    sendBtn.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/BackEnd/chat_insert.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    inputField.value = "";
                    scrollToBottom();
                }
            }
        };
        let formData = new FormData(form);
        xhr.send(formData);
    };

    chatBox.onmouseenter = () => {
        chatBox.classList.add("active");
    };

    chatBox.onmouseleave = () => {
        chatBox.classList.remove("active");
    };

    setInterval(() => {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/BackEnd/chat_get.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    chatBox.innerHTML = data;
                    if (!chatBox.classList.contains("active")) {
                        scrollToBottom();
                    }
                }
            }
        };
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("incoming_id=" + inId);
    }, 500);

    function scrollToBottom() {
        chatBox.scrollTop = chatBox.scrollHeight;
    }
}


1. Update the JavaScript to handle link clicks and load the chat interface dynamically
We will modify the JavaScript to load the chat interface dynamically within the same page when a user clicks on a link in the users-list.

2. Update the PHP file to return the required data
We'll ensure the PHP files return the necessary data to populate the chat interface.

3. Integrate the chat interface within the HTML structure
We will include a container for the chat interface within the first snippet and update the HTML and JavaScript accordingly.


// fetch_chat.php
<?php
include_once "db_con.php";
session_start();

$out_id = mysqli_real_escape_string($con, $_POST['out_id']);
$in_id = mysqli_real_escape_string($con, $_POST['in_id']);

$sql = "SELECT org_name, org_logo FROM org_list WHERE org_id = $in_id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);

$output = '<header>
        <img src="/UserImage/accountPic/' . $row['org_logo'] . '" alt="">
        <div class="details">
            <span>' . $row['org_name'] . '</span>
        </div>
    </header>
    <div class="chat-box">';

$sql = "SELECT * FROM messages WHERE (outgoing_msg_id = {$out_id} AND incoming_msg_id = {$in_id})
        OR (outgoing_msg_id = {$in_id} AND incoming_msg_id = {$out_id}) ORDER BY msg_id ASC";
$query = mysqli_query($con, $sql);

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $output .= '<div class="chat '. ($row['outgoing_msg_id'] === $out_id ? 'outgoing' : 'incoming') .'">
                        <div class
