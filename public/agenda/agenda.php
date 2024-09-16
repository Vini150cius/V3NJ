<main class="agendaPage">
    <section>
        <ul class="agendaList">
            <?php

            include_once './../class/agenda.php';
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
                                <p class="dateTaskFinish"> <?= $data_fim ?></p>
                                </p>


                                
                                
                            </div>
                            <div class="itemViewContainer">
                            <button class="viewTask">
                                    <a href="?p=agenda/view&id=<?= $chave?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg>
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