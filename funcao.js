     $( document ).ready(function() {
                    var $dbh;
                    $server = 'http://localhost/xampp/TCC/www';
    
                     $('#inclusao').on('click', function(){
                        $nome = $('#nome').val();
                        $sobrenome = $('#sobrenome').val(); 
                         
                        $.ajax({
                            type: "post",
                            url: $server+"/conecta.php",
                            data: "nome="+$nome+"&sobrenome="+$sobrenome+"&acao=inclusao",
                           success: function(data) {
                            intel.xdk.notification.alert('Usuário Cadastrado!','Aviso!','OK');
                                Lista();
                            }
                        });
                    });


                                         
                   function Lista(){
                           $.ajax({

                               type: "post",
                               dataType  : 'html',
                               url: $server+"/conecta.php",
                               data: "acao=listarcolecao",
                               success: function(data) {
                                    $('#listarcolecao').html(data);
                                }
                           });
                    }

                 Lista();

            });
