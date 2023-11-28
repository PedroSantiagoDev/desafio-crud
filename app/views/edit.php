<header>
    <h1>Atualizar <span>Tarefa</span></h1>
    <button type="submit" form="formEdit">
        Atualizar
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.24 19C15.6863 19 18.48 15.866 18.48 12C18.48 8.13401 15.6863 5 12.24 5C8.79374 5 6 8.13401 6 12C6 15.866 8.79374 19 12.24 19Z" stroke="#F2F2F2" stroke-width="2" />
            <path d="M9.74414 13.05L12.2401 10.25L14.7361 13.05" stroke="#F2F2F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</header>


<form action="/task/update/<?php echo $task->id; ?>" id="formEdit" method="post">
    <div class="inputnewtask">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="<?php echo $task->title ?>">
        <label for="description">Descrição:</label>
        <input type="text" name="description" id="description" value="<?php echo $task->description ?>">
    </div>
</form>