<main class="agendaPage">
    <section>
        <div class="addTaskContainer">
            <button class="addTask"><a href="?p=agenda/salvar">Adicionar tarefa</a></button>
        </div>
        <ul class="agendaList">
            <!--  José, colocar o que está abaixo (li), no foreach, é toda a tag li. -->

            <?php

            include_once '../class/agenda.php';
            $age = new agenda();
            $listar = $age->listar();

            if (!empty($listar)) {
                foreach ($listar as $chave => $mostrar) { ?>
                    <li class="agendaListItem">
                        <div class="itemContainer">
                            <div class="itemCheckboxContainer">
                                <div class="checkbox-wrapper-12">
                                    <div class="cbx">
                                        <input checked="" type="checkbox" id="cbx-12">
                                        <label for="cbx-12"></label>
                                        <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
                                            <path d="M2 8.36364L6.23077 12L13 2"></path>
                                        </svg>
                                    </div>

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <filter id="goo-12">
                                                <feGaussianBlur result="blur" stdDeviation="4" in="SourceGraphic"></feGaussianBlur>
                                                <feColorMatrix result="goo-12" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" mode="matrix" in="blur"></feColorMatrix>
                                                <feBlend in2="goo-12" in="SourceGraphic"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="itemInfoContainer">

                                <?php
                                $data_inicio = date_format(date_create($mostrar['datainicio']), 'd/m/Y');
                                $data_fim = date_format(date_create($mostrar['datafim']), 'd/m/Y');
                                ?>
                                <!-- Colocar a data que a tarefa foi adicionada -->
                                <p class="dateTask"><?= $data_inicio ?></p>
                                <!-- Colocar oq é a tarefa -->
                                <h1 class="titleTask"> <?= $mostrar['titulometa'] ?></h1>
                                <!-- Colocar a data que a tarefa vai ter que ser concluida -->
                                <p class="dateTaskFinish"> <?= $data_inicio ?></p>
                                </p>





                            </div>
                            <div class="itemDeleteContainer">
                                <button class="deleteTask">
                                    <a href="?p=agenda/excluir&id=<?= $chave ?>" data-confirm>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <div class="itemEditContainer">
                                <button class="editTask">
                                    <a href="?p=agenda/salvar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </li>
            <?php
                }
            }
            ?>

        </ul>
    </section>
</main>