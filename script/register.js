function registration(e) {
    e.preventDefault()
    const password = $('#password').val()
    const repeat_p = $('#repeat_pass').val()
    if (password !== repeat_p) {
        return alert("Пароли не совпадают!")
    }
    const user = {
        nick: $('#nick').val(),
        login: $('#login').val(),
        password: $('#password').val()
    }

    console.log(user)
    $.ajax({
        url: 'db_code/reg.php',
        data: user,
        method: 'POST'
    }).done(function(res) {
        res = JSON.parse(res)
        if (res) {
            alert('Вы успешно зарегистрированы!')
        } else {
            alert('Пользователь с таким ником уже есть !')
        }
    })

}