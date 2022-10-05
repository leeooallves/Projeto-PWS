               <div class="limitesInternos">
                   <div class="menu">
                       <a class="itemMenu" href="?pagina=cadastrarUsuario">Novo Usuario</a>
                   </div>
               </div>


               <div class="conteudo">
                   <table class="conteudo" style="border:1px  solid #ccc;">
                       <tr style="justify-content: center;">
                           <th>Nome</th>
                           <th>Sobrenome</th>
                           <th>E-mail</th>
                           <th>Telefone</th>
                           <th>Cargo</th>
                       </tr>

                       <?php
                        include 'model/conexaoDB.php';
                        while ($linha = mysqli_fetch_array($consulta_usuarios)) {
                            echo '<tr><td>' . $linha['nome'] . '</td>';
                            echo '<td>' . $linha['sobrenome'] . '</td>';
                            echo '<td>' . $linha['email'] . '</td>';
                            echo '<td>' . $linha['telefone'] . '</td>';
                            echo '<td>' . $linha['cargo'] . '</td>';
                        ?>
                           <td>
                               <a href="../projeto22/model/excluirFuncionario.php" <?php echo $linha['id_usuario']; ?>">Deletar</a>
                           </td>
                           </tr>
                       <?php
                        }
                        ?>
                   </table>