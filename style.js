function checkForm() {
    const name = document.getElementsByName("name")[0].value;
    const companyName = document.getElementsByName("companyName")[0].value;
    const email = document.getElementsByName("email")[0].value;
    const age = document.getElementsByName("age")[0].value;
    const message = document.getElementsByName("message")[0].value;

    if (
        name === "" ||
        companyName === "" || 
        email === "" || 
        age === "" || 
        message === ""
    ) {
        alert("必須項目が未入力です。入力内容をご確認ください。");
        return false;
    }

    const confirmMessage =
        "下記の内容を本当に送信しますか？\n\n" +
        "お名前:" + name + "\n" +
        "会社名:" + companyName + "\n" +
        "メール:" + email + "\n" +
        "年齢:" + age + "\n" +
        "内容:" + message;

    return confirm(confirmMessage);
}

let currentIndex = 0;
const colors = ["blue", "red", "yellow", "gray"];

function changeFooterColor() {
    const footer = document.querySelector("footer");

    footer.style.backgroundColor = colors[currentIndex];

    currentIndex = (currentIndex + 1) % colors.length;
}