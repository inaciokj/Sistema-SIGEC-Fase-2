<?php
  define('MPDF_PATH', 'class/mpdf/');
  include(MPDF_PATH.'mpdf.php');
  $mpdf=new mPDF();
  $mpdf->WriteHTML('ISPTEC'); 
  $mpdf->WriteHTML('LICENCIATURA EM ENGENHARIA INFORMATICA');
  $mpdf->WriteHTML('SISTEMA DE GESTAO DE CONHECIMENTOS');  
  $mpdf->WriteHTML('SIGEC ');
  $mpdf->WriteHTML('');
  $mpdf->WriteHTML('');
  $mpdf->WriteHTML('<p>Desde a época primordial da computação, 
                                     o ser humano está em constantes pesquisas nos seus laboratórios em busca de uma nova experiência desenvolvendo sistemas complexos, 
                                     softwares sofisticados, equipamentos de produção específica e diversa para o ajudar a minimizar as dificuldades das tarefas diárias.
                                     
                                     <p>Ao longo do desenvolvimento dos seus sistemas, 
                                     softwares e equipamentos, o ser humano depara-se com muitas questões, 
                                     tarefas e problemas difíceis de solucionar, 
                                     as vezes acaba abandonando o projecto por encontrar situações impossíveis de resolver.
                                     
                                     <p>Neste momento de aflição misturado com a força e a vontade suprema de querer terminar o projecto, 
                                     recorre aos amigos, colegas e professores para o ajudarem.
                                     
                                     <p>O Instituto Superior Politécnico de Tecnologia e Ciências carece de uma plataforma de conhecimento 
                                     aonde os estudantes e os professores possam directamente interagir na resolução de determinadas questões,
                                     que posteriormente poderão ser aplicadas em projectos específicos dentro e fora da Instituição.
                                     
                                     <p>Esta plataforma será semelhante a redes académicas já existentes, 
                                     contudo com mais particularidades que a distinguirão de outras.
                                     
                                     <p>Para se puder fazer o uso, não necessariamente todos devem estar cadastrados. 
                                     Ela permite o acesso até daqueles que não possuam cadastro no sistema. 
                                     Isso permitirá que todas as pessoas tenham acesso a informações públicas.
                                     
                                     <p>Haverá uma área pública onde toda pessoa, quer tenha cadastro quer não conseguirá aceder. 
                                     Nela se pode procurar dúvidas já respondidas ou que possam ser respondidas por área de conhecimento. 
                                     Apresentará publicações acerca de dúvidas da mais recente para a mais antiga.
                                     
                                     <p>Ainda dentro da área pública é possível que o usuário forneça comentários, 
                                     acerca das questões apresentadas, e se possível é necessário que ele forneça seu nome 
                                     e correio electrónico. Sem estes itens não será possível realizar esta acção. 
                                     
                                        <p>Ainda nesta área será possível, 
                                            que todos os usuários, 
                                            até mesmo o não cadastrado no sistema consigam aceder a qualquer artigo científico,
                                            notícia ou informações sobre um determinado evento de carácter académico e social.</p>');
  $mpdf->WriteHTML('');
  $mpdf->WriteHTML('');
  $mpdf->WriteHTML('Este Sistema foi desenvolvido por: ');
  $mpdf->WriteHTML('Inacio Jose e Judson Paiva');     
  $mpdf->WriteHTML('Estudantes de Engª Informática ');   
  $mpdf->WriteHTML('');
  
  
  $mpdf->Output();    
  exit();

   