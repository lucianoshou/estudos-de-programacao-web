<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
          crm VARCHAR(20) PRIMARY KEY,
          nome_medico VARCHAR(500)
          ) ENGINE=innoDB";

 $conexao->query($sql);