<style>
    .linkLinkListA {
        color: #fff;
        transition: 0.2s;
    }

    .linkLinkListA:hover {
        color: #7A28CB;
    }

    .linkLinkListA.active {
        color: #7A28CB;
    }
</style>

<nav class="navbarContainer">
    <div class="navbarCapsule">
        <div class="nameSiteDiv">
            <img style="width: 70px; height: 70px; object-fit: contain;" src="./../assets/tituloSite.png" alt="">
            <!-- <h1 class="nameSite">
                V3NJ
            </h1> -->

        </div>
        <div class="linkListContainer">
            <ul class="linkList">
                <li class="itemLinkList"><a href="?p=agenda/listar" class="linkLinkListA">Agenda</a></li>
                <li class="itemLinkList"><a href="?p=exercises/listar" class="linkLinkListA">Exercícios </a></li>
                <li class="itemLinkListLogin"><a href="../public/login.html" class="linkLinkListLoginA">Log out </a></li>
            </ul>
        </div>
    </div>

</nav>