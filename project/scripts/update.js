function ChangeAction(form, id)
{
    form = document.getElementById(form);
    form.action = `handler\\update.php?id=<?= $elems[${id}] ?>`;
}