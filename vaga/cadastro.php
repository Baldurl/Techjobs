<header class="main-header">

    <nav class="main-header-content">

        <div class="logo">
            <a href="index.php">TechJobs</a>
        </div>

        <nav class="menu">

            <ul>
                <li class="item-menu">
                    <a href="index.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                </li>
                <li class="item-menu">
                    <a style="color: coral" href="login/login.php">
                        <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                        <span class="txt-link">Login</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a style="color: coral" href="usuarios/opçõesCadastro.php">
                        <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                        <span class="txt-link">Cadastrar</span>
                    </a>
                </li>

            </ul>
            <h1>Cadastrar vagas: </h1>

            <main>

    <h1>Nova Vaga</h1>
    <form action="create.php" method="post">
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Informe nome." size="80" required autofocus><br>
        <label>Tipo</label><br>
        <input type="text" name="tipo" placeholder="Informe tipo." required><br>
        <label>Cargo</label><br>
        <input type="text" name="cargo" placeholder="Informe o cargo." required><br>
        <label>Salário</label><br>
        <input type="number" name="salario" placeholder="Informe o salário." required><br>
        <label>Carga horária</label><br>
        <input type="text" name="cargahoraria" placeholder="Informe a carga horária." required><br>
        <label>Data de Publicação</label><br>
        <input type="date" name="publicacao" placeholder="Informe a data de publicacao." required><br>
        <label>Data de Expiração</label><br>
        <input type="date" name="expiracao" placeholder="Informe a data de publicacao." required><br>
        <button class="btn" type="submit">Salvar</button>
    </form>
</main>


        </nav>
    </nav>
</header>