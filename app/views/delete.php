<section>
    <div class="deletetask">
        <h2>Deseja excluir <span>essa tarefa?</span> </h2>
        <p>Título: <?php echo $task->title; ?></p>
        <p>Descrição: <?php echo $task->description; ?></p>
        <div class="deletetaskbutton">
            <a href="/task/destroy/<?php echo $task->id; ?>">SIM</a>
            <a href="/">NÃO</a>
        </div>
    </div>
</section>