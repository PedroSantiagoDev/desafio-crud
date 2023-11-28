<header>
    <h1>Tar<span>efas</span></h1>
    <a href="/task">
        Adicionar
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.98373 1.45158C9.27565 1.45158 10.5386 1.83468 11.6128 2.55244C12.687 3.27019 13.5242 4.29037 14.0186 5.48395C14.513 6.67754 14.6424 7.99092 14.3903 9.25802C14.1383 10.5251 13.5161 11.689 12.6026 12.6026C11.6891 13.5161 10.5252 14.1382 9.25807 14.3903C7.99097 14.6423 6.67759 14.5129 5.484 14.0185C4.29042 13.5241 3.27025 12.6869 2.55249 11.6127C1.83473 10.5385 1.45163 9.2756 1.45163 7.98368C1.45832 6.25332 2.14867 4.59574 3.37223 3.37218C4.59579 2.14862 6.25337 1.45827 7.98373 1.45158ZM7.98373 5.77648e-06C6.40611 0.00645971 4.86578 0.480174 3.55717 1.36134C2.24857 2.24252 1.23037 3.49164 0.631106 4.95102C0.031846 6.4104 -0.121605 8.01461 0.190125 9.56114C0.501855 11.1077 1.26479 12.5272 2.38262 13.6404C3.50044 14.7537 4.92304 15.5108 6.47082 15.8162C8.01861 16.1217 9.62218 15.9617 11.0791 15.3564C12.536 14.7512 13.781 13.7279 14.6568 12.4158C15.5326 11.1036 16 9.5613 16.0001 7.98368C16.0001 6.93249 15.7925 5.89165 15.3892 4.92089C14.986 3.95014 14.395 3.06857 13.6502 2.32679C12.9053 1.58501 12.0214 0.997618 11.049 0.598327C10.0766 0.199035 9.0349 -0.00429452 7.98373 5.77648e-06Z" fill="#F2F2F2" />
            <path d="M11.707 7.38127H8.4954V4.16966H7.41397V7.38127H4.19873V8.4627H7.41397V11.6743H8.4954V8.4627H11.707V7.38127Z" fill="#F2F2F2" />
        </svg>
    </a>
</header>

<section>
    <div class="taskOption">
        <p>Tarefas Criadas <span><?php echo count($tasks); ?></span></p>
    </div>
</section>

<?php if (count($tasks) === 0) : ?>
    <section>
        <div class="boxEmpty">
            <img src="/assets/img/Clipboard.png" alt="Foto Clip Board" />
            <p><strong>Você ainda não tem tarefas cadastradas</strong>Crie tarefas e organize seus itens à fazer</p>
        </div>
    </section>

<?php else : ?>
    <section class="listTask">
        <?php foreach ($tasks as $task) : ?>
            <div class="task">
                <div class="taskCheck">
                    <button class="checkboxcontainer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9643 4.85958C13.3765 4.85958 14.7571 5.27836 15.9313 6.06297C17.1056 6.84757 18.0208 7.96277 18.5612 9.26752C19.1017 10.5723 19.2431 12.008 18.9676 13.3931C18.6921 14.7782 18.012 16.0505 17.0134 17.0492C16.0148 18.0478 14.7424 18.7278 13.3573 19.0034C11.9722 19.2789 10.5365 19.1375 9.23173 18.597C7.92697 18.0566 6.81178 17.1414 6.02717 15.9671C5.24257 14.7929 4.82378 13.4123 4.82378 12.0001C4.8311 10.1085 5.58574 8.29658 6.92326 6.95906C8.26079 5.62154 10.0728 4.86689 11.9643 4.85958ZM11.9643 3.2728C10.2397 3.27986 8.55592 3.79769 7.12543 4.76093C5.69494 5.72418 4.58191 7.08964 3.92683 8.68495C3.27176 10.2803 3.10401 12.0339 3.44478 13.7245C3.78554 15.415 4.61954 16.9667 5.84148 18.1837C7.06342 19.4007 8.61852 20.2283 10.3105 20.5622C12.0024 20.896 13.7553 20.7211 15.348 20.0595C16.9406 19.398 18.3015 18.2794 19.2589 16.845C20.2163 15.4105 20.7272 13.7246 20.7273 12.0001C20.7273 10.851 20.5003 9.7132 20.0595 8.65202C19.6187 7.59085 18.9727 6.62717 18.1585 5.8163C17.3443 5.00543 16.378 4.36333 15.315 3.92685C14.2521 3.49037 13.1134 3.2681 11.9643 3.2728Z" fill="#4EA8DE" />
                        </svg>
                    </button>
                    <p>
                        <span class="title"><?php echo $task->title ?>: </span><?php echo $task->description ?>
                    </p>
                </div>

                <div class="taskFunctions">
                    <button>
                        <a href="/task/edit/<?php echo $task->id; ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.1583 6.98294L16.7124 8.72637M16.1574 5.44704L11.9531 10.1634C11.7358 10.4068 11.5877 10.7168 11.5273 11.0545L11.1389 13.2352L13.0829 12.7988C13.3839 12.7312 13.6599 12.5657 13.8772 12.3219L18.0815 7.60553C18.2079 7.4638 18.3081 7.29555 18.3765 7.11037C18.4448 6.92519 18.48 6.72672 18.48 6.52628C18.48 6.32585 18.4448 6.12738 18.3765 5.9422C18.3081 5.75702 18.2079 5.58877 18.0815 5.44704C17.9552 5.30531 17.8052 5.19288 17.6401 5.11618C17.4751 5.03948 17.2981 5 17.1195 5C16.9408 5 16.7639 5.03948 16.5988 5.11618C16.4337 5.19288 16.2837 5.30531 16.1574 5.44704Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.0119 14.8823V17.3529C17.0119 17.7898 16.8572 18.2087 16.5818 18.5176C16.3065 18.8265 15.933 19 15.5436 19H7.46825C7.07885 19 6.70539 18.8265 6.43004 18.5176C6.15469 18.2087 6 17.7898 6 17.3529V8.29401C6 7.85718 6.15469 7.43824 6.43004 7.12935C6.70539 6.82046 7.07885 6.64693 7.46825 6.64693H9.67063" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </button>
                    <button>
                        <a href="/task/show/<?php echo $task->id; ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.2021 9.98548H12.8716V15.5073H14.2021V9.98548Z" fill="#808080" />
                                <path d="M11.4624 9.98548H10.1318V15.5073H11.4624V9.98548Z" fill="#808080" />
                                <path d="M18.478 7.16712C18.4754 7.03061 18.4295 6.89846 18.3469 6.78975C18.2642 6.68104 18.1492 6.6014 18.0184 6.56232C17.9596 6.53782 17.8974 6.52252 17.8339 6.51696H14.2868C14.1525 6.07791 13.8808 5.69355 13.5117 5.42047C13.1426 5.14739 12.6956 5 12.2365 5C11.7774 5 11.3304 5.14739 10.9613 5.42047C10.5922 5.69355 10.3205 6.07791 10.1862 6.51696H6.63911C6.58068 6.51814 6.52269 6.52729 6.46674 6.54418H6.45162C6.31318 6.58701 6.19334 6.67547 6.11163 6.79515C6.02992 6.91483 5.99117 7.05866 6.00169 7.20319C6.01222 7.34771 6.0714 7.48441 6.16958 7.59099C6.26776 7.69757 6.39916 7.76774 6.54234 7.79006L7.25298 17.5334C7.26382 17.9127 7.41693 18.2741 7.68191 18.5458C7.94688 18.8175 8.30435 18.9797 8.68332 19H15.7867C16.1662 18.9804 16.5244 18.8186 16.79 18.5468C17.0556 18.2751 17.2092 17.9132 17.22 17.5334L17.9277 7.79914C18.0802 7.77797 18.22 7.70232 18.3212 7.58615C18.4223 7.46999 18.478 7.32116 18.478 7.16712ZM12.2365 6.21456C12.3661 6.21458 12.4943 6.24146 12.6129 6.29351C12.7316 6.34556 12.8382 6.42164 12.926 6.51696H11.547C11.6346 6.42135 11.7411 6.34507 11.8599 6.29299C11.9786 6.24092 12.1069 6.21421 12.2365 6.21456ZM15.7867 17.7904H8.68332C8.60168 17.7904 8.47467 17.6573 8.45955 17.4457L7.75798 7.81123H16.715L16.0135 17.4457C15.9984 17.6573 15.8714 17.7904 15.7867 17.7904Z" fill="#808080" />
                            </svg>
                        </a>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
<?php endif; ?>