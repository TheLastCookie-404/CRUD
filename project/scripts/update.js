function ChangeAction(form, input, id)
{
    form = document.getElementById(form);
    input = document.getElementById(input);
    
    form.action = `handler\\update.php?id=${id}`;
    input.placeholder = `Редактировать элемент: ${id}`;
}