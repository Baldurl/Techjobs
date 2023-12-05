-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/12/2023 às 10:07
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techjobsdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `assinatura`
--

CREATE TABLE `assinatura` (
  `id` int NOT NULL,
  `periodo` varchar(55) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `data` date NOT NULL,
  `usuario_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `usuario_id` int DEFAULT NULL,
  `vaga_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id`, `nome`, `feedback`, `usuario_id`, `vaga_id`) VALUES
(28, 'Essa vaga em Web Design é magnífica', 'Profissionais muito bem qualificados, estou adquirindo muita eficiência e aprendizado.                                        ', 49, 15),
(30, 'Programa de estágio eficiente', 'Estágio muito bom para quem está começando na área.                    ', 49, 17),
(32, 'Vaga muito boa para profissionais experientes. ', 'Excelente carga horária e trabalho remoto, sem contar os benefícios inclusos, como os planos de saúde e o vale-refeição.                                       ', 44, 18),
(33, 'Essa vaga em suporte parece ser promissora!', 'Espero conseguir um emprego com essa empresa que estou de olho a muito tempo, boa sorte pra mim!', 49, 19);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int NOT NULL,
  `meio_pagamento` varchar(50) NOT NULL,
  `valor` varchar(40) NOT NULL,
  `usuario_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Candidato'),
(3, 'Empresa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `razao_social` varchar(50) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `ddi` varchar(6) DEFAULT NULL,
  `ddd` varchar(20) DEFAULT NULL,
  `numero` varchar(17) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `logradouro` varchar(10) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `lote` varchar(10) DEFAULT NULL,
  `rua` varchar(30) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `curriculo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `perfil_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `razao_social`, `cpf`, `cnpj`, `senha`, `email`, `sexo`, `ddi`, `ddd`, `numero`, `cep`, `cidade`, `logradouro`, `bairro`, `lote`, `rua`, `complemento`, `curriculo`, `perfil_id`) VALUES
(1, 'Jordan', NULL, '075-276-691-01', NULL, '123', 'jordanvieiracarvalho@hotmail.com', 'Masculino', '', '61', '998490406', '72251702', 'Ceilândia', NULL, 'QNO 7', '10', 'B', NULL, '', 1),
(29, 'microsoft', NULL, '1212312312', NULL, '123', 'microsoft@email.com', NULL, NULL, '61', '998490406', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 3),
(44, 'joao', NULL, '12312312312', NULL, '123', 'joao@email.com', NULL, NULL, '61', '91234-1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Currículo-Jordan.pdf', 2),
(49, 'Laila', '', '07227669101', '', '123', 'laila@email.com', NULL, '55', '61', '93333-3333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Currículo-Jordan.pdf', 2),
(51, 'VagasApp', 'adidas', NULL, '111.111.111/1111', '123', 'vagasapp@email.com', NULL, NULL, '61', '91111-1111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 3),
(52, 'Salesjobs', 'nike', NULL, '222.222.222/2222', '123', 'salesjobs@email.com', NULL, NULL, '61', '92222-2222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 3),
(53, 'Vert Integradora de TI', 'ifood', NULL, '22.222.222/0001-22', '0123', 'vert@email.com', NULL, NULL, '61', '91234-1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 3),
(55, 'maria', NULL, '999999999-99', NULL, '123', 'maria@email.com', NULL, NULL, '61', '99999-9999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Currículo-Jordan.pdf', 2),
(56, 'Netvagas', 'Netvagas', '', '12.345.678/0001-00', '123', 'netvagas@email.com', NULL, '55', '61', '97777-7777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(58, 'a', '', '075276691-99', '', '123', 'a@email.com', NULL, '55', '61', '998490406', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_has_vaga`
--

CREATE TABLE `usuario_has_vaga` (
  `usuario_id` int DEFAULT NULL,
  `vaga_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `usuario_has_vaga`
--

INSERT INTO `usuario_has_vaga` (`usuario_id`, `vaga_id`) VALUES
(44, 15),
(44, 18),
(44, 19),
(49, 15),
(49, 17),
(49, 18),
(49, 19),
(49, 21),
(55, 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int NOT NULL,
  `nome` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `descricao` longtext NOT NULL,
  `salario` varchar(50) NOT NULL,
  `carga_horaria` varchar(100) NOT NULL,
  `data_publicacao` date NOT NULL,
  `data_expiracao` date NOT NULL,
  `usuario_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `vaga`
--

INSERT INTO `vaga` (`id`, `nome`, `tipo`, `descricao`, `salario`, `carga_horaria`, `data_publicacao`, `data_expiracao`, `usuario_id`) VALUES
(15, 'Web Designer', 'Efetivo/Clt', 'Procuramos um Web Designer talentoso e criativo para se juntar à nossa equipe e contribuir para a criação de experiências digitais excepcionais. Se você é apaixonado por design web, tem um olho afiado para detalhes e está atualizado com as tendências de design mais recentes, gostaríamos de ouvir de você.&#13;&#10;Responsabilidades:&#13;&#10;&#13;&#10;Design de Interface de Usuário (UI): Criar layouts atraentes e intuitivos para websites e aplicativos, garantindo a melhor experiência do usuário.&#13;&#10;Design Responsivo: Desenvolver designs que funcionem de forma eficaz em diferentes dispositivos e tamanhos de tela.&#13;&#10;Prototipagem: Criar protótipos interativos e wireframes para visualizar e testar conceitos de design.&#13;&#10;Colaboração: Trabalhar em estreita colaboração com a equipe de desenvolvimento, marketing e clientes para garantir a execução bem-sucedida dos projetos.&#13;&#10;Gestão de Conteúdo Visual: Contribuir para a seleção e criação de imagens, gráficos e elementos visuais que enriqueçam o conteúdo online.&#13;&#10;Manutenção e Atualização: Fornecer suporte contínuo para atualizações de conteúdo e melhorias de design em websites existentes.&#13;&#10;Tendências de Design: Manter-se atualizado sobre as tendências de design e tecnologias emergentes para garantir que nossos projetos estejam na vanguarda.&#13;&#10;&#13;&#10;&#13;&#10;Requisitos:&#13;&#10;&#13;&#10;Experiência comprovada em design web, preferencialmente com um portfólio de projetos anteriores.&#13;&#10;Domínio de ferramentas de design, como Adobe Creative Suite (Photoshop, Illustrator, XD) ou ferramentas similares.&#13;&#10;Conhecimento em HTML, CSS e outras tecnologias front-end é uma vantagem.&#13;&#10;Criatividade e habilidade para traduzir conceitos complexos em designs visualmente atraentes.&#13;&#10;Capacidade de trabalhar de forma independente e em equipe, gerenciando prazos e prioridades.&#13;&#10;Boa compreensão dos princípios de usabilidade e experiência do usuário (UX).&#13;&#10;&#13;&#10;Benefícios:&#13;&#10;&#13;&#10;Salário competitivo.&#13;&#10;Oportunidades de desenvolvimento profissional.&#13;&#10;Ambiente de trabalho criativo e colaborativo.&#13;&#10;Pacote de benefícios abrangente.&#13;&#10;', 'R$3500,00', '50h semanais', '2023-11-09', '2023-12-15', 51),
(17, '(Homeoffice) Programa de Estágio - Tecnologia da informação', 'Estágio', 'Empresa brasileira de tecnologias e serviços que foi pioneira no mundo ao se especializar 100% em recrutamento, seleção e avaliação de profissionais de vendas e marketing. É norteada pelo foco em qualidade e gerar valor junto aos clientes, e usa tecnologia somada ao know-how dos consultores para ter alto nível de assertividade.&#13;&#10;&#13;&#10;O que oferecemos:&#13;&#10;&#13;&#10;- Oportunidade de aprendizado prático em um ambiente de trabalho colaborativo.&#13;&#10;- Experiência em uma empresa líder, com possibilidade de crescimento.&#13;&#10;- Mentoria e suporte contínuo para desenvolvimento profissional.&#13;&#10;&#13;&#10;Pré-requisitos:&#13;&#10;&#13;&#10;- Ensino superior em andamento em cursos relacionados a Tecnologia da Informação ou áreas correlatas;&#13;&#10;- Desejável experiência prévia em áreas de Suporte e SaaS;&#13;&#10;- Disponibilidade de atuar em horário comercial (pela manhã ou tarde);&#13;&#10;- Boa comunicação oral e escrita.&#13;&#10;&#13;&#10;', 'R$1200,00', '60h semanais', '2023-11-13', '2023-12-25', 52),
(18, 'Desenvolvedor IOS Sênior', 'Efetivo/CLT', 'Com maestria técnica e excelência operacional estão sempre buscando entender as necessidades dos nossos clientes para criar e desenvolver os melhores produtos digitais.&#13;&#10;Nosso time é multidisciplinar, dominam metodologias e práticas ágeis, são dedicados a fazerem entregas constantes de valor.&#13;&#10;Diante disso, construímos o produto certo, do jeito correto e operamos para garantir a melhor experiência do cliente, além de estabilidade, qualidade e confiabilidade.&#13;&#10;&#13;&#10;RESPONSABILIDADES E ATRIBUIÇÕES&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;Desenvolvedor iOS Sênior para atuação em projeto da área financeira. &#13;&#10;&#13;&#10;Participar da concepção, desenvolvimento e entrega de produto digital destinado a plataforma Open Banking.&#13;&#10;&#13;&#10;&#13;&#10;REQUISITOS E QUALIFICAÇÕES&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;Experiência em desenvolvimento e manutenção de aplicativos mobile nativos iOS (Swift);&#13;&#10;Experiência no uso de Web Services (REST, JSON/XML);&#13;&#10;Sólidos conhecimentos em construção de views (Xibs, Storyboards, Autolayout, ViewCode);&#13;&#10;Conhecimento Metodologia Agile, Scrum.&#13;&#10;Conhecimentos em Programação Orientada a Objetos;&#13;&#10;Conhecimentos em programação com reativo (RxSwift);&#13;&#10;Conhecimentos em desenvolvimento de testes;&#13;&#10;Conhecimentos em desenvolvimento com frameworks;&#13;&#10;Persistência com Core Data ou Realm;&#13;&#10;Gestão de dependências com CocoaPods e Carthage;&#13;&#10;Guide Lines da Apple.&#13;&#10;&#13;&#10;NOSSOS BENEFÍCIOS:&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;● Plano de Saúde Bradesco (Coparticipação de 30%);&#13;&#10;● Odontológico Bradesco (Sem contribuição);&#13;&#10;● Dr. Alper - Plataforma healthtech com telemedicina, teleorientação médica e nutricionista;&#13;&#10;● Seguro de Vida;&#13;&#10;● Gympass;&#13;&#10;● Auxílio Creche;&#13;&#10;● Apoio Pass.&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;BENEFÍCIOS FLEXÍVEIS - que é possível direcionar os pontos da maneira que mais fizer sentido, dentre os benefícios:&#13;&#10;&#13;&#10;● Vale-alimentação;&#13;&#10;● Vale-refeição;&#13;&#10;● Auxílio Combustível;&#13;&#10;● Auxílio Home Office;&#13;&#10;● Previdência privada;&#13;&#10;● Upgrade de convênio médico.&#13;&#10;&#13;&#10;&#13;&#10;&#13;&#10;', 'R$20000,00', '70h semanais', '2023-11-27', '2023-12-30', 29),
(19, 'Técnico de Suporte', 'Efetivo/CLT', 'Sobre a vaga&#13;&#10;Vagas presenciais para Brasília / Anápolis / Campo Grande e Cuiabá&#13;&#10;Disponibilidade para atuação 12x36 dia ou noite - presencial&#13;&#10;Ensino médio completo.&#13;&#10;Experiência com suporte técnico presencial ou remoto&#13;&#10;&#13;&#10;Atribuições:&#13;&#10;&#13;&#10; Configurar, Desinstalar, Instalar e substituir - Gabinete Desktop - Monitor - Mouse&#13;&#10; Atualizar, configurar, criar atalho, Criar Imagem, formatar, mapear pasta, Realizar Backup de Sistema Operacional - Desktop&#13;&#10; Configurar E-Mail - Equipamentos Celular&#13;&#10; Alterar DNS - Equipamentos Estação de trabalho&#13;&#10; Equipamentos Estação de trabalho - Configurar Teclado - Monitor - Perfil Estação de Trabalho&#13;&#10; Equipamentos Estação de trabalho: Incluir e retirar do Domínio&#13;&#10; Configurar, Instalar - Equipamentos Multifuncional&#13;&#10; Atualizar, configurar, criar atalho, Criar Imagem, formatar, mapear pasta - Notebook&#13;&#10; Configurar Impressora e sanar dúvidas', 'R$2000,00', '40h semanais', '2023-11-28', '2023-12-30', 53),
(21, 'Estagiário de TI', 'Estágio', 'PARA ISSO É ESSENCIAL QUE VOCÊ:&#13;&#10;&#13;&#10;Esteja cursando curso superior em Redes de Computadores e áreas relacionadas;&#13;&#10;Tenha conhecimentos em hardware de notebooks;&#13;&#10;Conheça sistemas operacionais Windows;&#13;&#10;Tenha conhecimentos básicos em redes IP (modelo OSI, DNS, DHCP).&#13;&#10;&#13;&#10;TRABALHO PRESENCIAL E DE TEMPO INTEGRAL.', 'R$1000,00', '30h semanais', '2023-12-03', '2023-12-10', 56);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `assinatura`
--
ALTER TABLE `assinatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKUsuario_3` (`usuario_id`);

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vaga` (`vaga_id`),
  ADD KEY `fk_usuario` (`usuario_id`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKUsuario_2` (`usuario_id`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`) USING BTREE;

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `usuarios_ibfk_1` (`perfil_id`),
  ADD KEY `senha` (`senha`) USING BTREE,
  ADD KEY `nome` (`nome`) USING BTREE,
  ADD KEY `cnpj` (`cnpj`) USING BTREE,
  ADD KEY `cpf` (`cpf`) USING BTREE;

--
-- Índices de tabela `usuario_has_vaga`
--
ALTER TABLE `usuario_has_vaga`
  ADD UNIQUE KEY `fk_unique_pk` (`usuario_id`,`vaga_id`),
  ADD KEY `FKUsuario_4` (`usuario_id`),
  ADD KEY `FKVaga` (`vaga_id`);

--
-- Índices de tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKUsuario` (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assinatura`
--
ALTER TABLE `assinatura`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `assinatura`
--
ALTER TABLE `assinatura`
  ADD CONSTRAINT `FKUsuario_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vaga` FOREIGN KEY (`vaga_id`) REFERENCES `vaga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `FKUsuario_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`);

--
-- Restrições para tabelas `usuario_has_vaga`
--
ALTER TABLE `usuario_has_vaga`
  ADD CONSTRAINT `FKUsuario_4` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKVaga` FOREIGN KEY (`vaga_id`) REFERENCES `vaga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `FKUsuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
