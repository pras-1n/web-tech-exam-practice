function validateForm(event) {
  event.preventDefault();

  let username = document.getElementById("usrname").value;
  let password = document.getElementById("pswd").value;
  let country = document.getElementById("cntry").value;
  let genders = document.getElementById("gndr");

  if (username.trim() === "" || username.length < 4) {
    alert("ユーザー名は必須で、　４文字以上である必要があります。");
    return false;
  }

  let pwdRegex = /^[a-zA-Z].*#$/;
  if (password === "" || !pwdRegex.test(password)) {
    alert(
      "パスワードが必要です、文字から始まり、シャープ（＃）で終わる必要があります。",
    );
    return false;
  }

  if (country === "") {
    alert("国を入力してください！");
    return false;
  }

  if (!gender) {
    alert("性冪を選んでください！");
    return false;
  }

  alert("フォームが送信されました");
  return true;
}
