let cookaa;
console.log(cookaa);

function ChangeAction(form, input, id)
{
    document.cookie = "lol=azaza";
    cookaa = document.cookie;
    form = document.getElementById(form);
    input = document.getElementById(input);
    
    form.action = `handler\\update.php?id=${id}`;
    input.placeholder = `Редактировать элемент: ${id}`;
}