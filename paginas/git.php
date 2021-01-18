 <div class="container">
            <div class="row pt-4">
                <div class="col">            
                    <h1 class="text-center badge-success p-sm-2">O que ? o Git? Entenda de uma vez!</h1>
                    <div class="col-8 m-auto">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://dkrn4sk0rn31v.cloudfront.net/2019/02/07195131/capa-git-github.png" alt="Primeiro Slide">
                                </div>                                
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/git.png" alt="Segundo Slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                        <hr />                        
                    </div>
                    <div class="row">
                        <div class="col">                            
                            <h3 class="badge-pill badge-info p-sm-2">O que é o Git?</h3>
                            <br>
                            <p>
                                Voce conhece a ferramenta Git? Compreende como as ferramentas desse sistema ir?o te ajudar? Reconhece a importancia dela para os programadores? Se sua resposta for nao, em primeiro lugar, 
                                fique tranquilo, pois esse artigo foi feito especialmente para voce. Nele irei apresentar as simples, por?m, 
                                importantes funcoes e utilidades 
                                que ser?o uma m?o na roda em muitos momentos nessa jornada de programador.
                            </p>
                            <p>
                                De inicio, precisamos saber o que e o Git, provavelmente em v?rios sites voc? j? leu que se tratava de um sistema de versionamento, 
                                e essa afirmac?o esta completamente certa, ja que pela propria plataforma pode-se criar novas versoes ou “Forks” que possibilitam
                                alterar c?digos dos seus amigos ou qualquer tipo de pessoa que esteja conectada a plataforma, como tambem, podemos enviar c?digos 
                                de seu computador para serem alterados por outro alguem, criando novas versoes de sua aplicacao (ou versionamento dos seus 
                                projetos). Entretanto, ainda n?o e possivel realizar um commit inverso, ou seja, enviar automaticamente do site para abri-lo 
                                na ide, restando apenas, baixar o projeto zipado, deszipar-lo no pc e ap?s isso alter?-lo para ide. Para entender melhor essa 
                                resumida explica??o e compreender outras funcionalidades do git nao ha maneira melhor do que praticar, jA que assim, tudo que 
                                foi passado sera melhor difundido em sua mente, dito isto, vamos p?r a m?o na massa.          
                            </p> 
                        </div>
                        <div class="col m-auto">
                            <img class="img-fluid" src="../plugins/img/github_1.jpg" alt="" />
                        </div>
                    </div>
                    <br />
                    <h2 class="text-center badge-pill badge-info p-sm-2">PRINCIPAIS FERRAMENTAS</h2>
                    <hr />
                    <p><b>Repository: </b> No Repository (ou traduzido para o nosso idioma, repositório) é o local onde será armazenado os projetos criados pelo desenvolvedor, além de realizar a interação com a IDE utilizada.</p>
                    <p><b>Fork: </b> O uso do Fork é muito importante, pois essa ferramenta é responsável por realizar a função de "pegar" projetos de outros desenvolvedores da plataforma e acoplá-lo ao seu repositório. Entretanto, a ação só pode ser feita com a confirmação do outro desenvolvedor.</p>                    
                    <p><b>Commits: </b> Com o uso desse opção é possível salvar modificações feitas pelos criadores do site ou qualquer desenvolvedor unido ao projeto, facilitando assim, cada vez mais na manunteção de erros no sistema.</p>
                    <p><b>Pull-request: </b> O pull-request é a ferramenta usada no próprio github para agregar o o projeto versionado á versão original e vice-versa, pois o contrário também pode acontecer, caso o projet seja produzido em grupo</p>
                    <p><b>Branch: </b> o conceito de branch é justamente ramificar o seu projeto em 2, como se cada um deles fosse um repositório, e depois juntá-lo novamente.</p>                   

                    <hr />
                    <h2 class="text-center badge-pill badge-info p-sm-2">O Git é bom?</h2>
                    <p>O Git tem a funcionalidade, desempenho, segurança e flexibilidade que a maioria das equipes e desenvolvedores individuais precisa. Esses atributos do Git são explicados acima. Nas comparações lado a lado com a maioria das outras alternativas, muitas equipes acham que o Git é muito favorável.</p>
                    <div class="row">
                        <div class="col">
                            <h2>Desempenho</h2>
                            <p>As características brutas de desempenho do Git são muito fortes quando comparadas a muitas alternativas. Fazer o commit de novas alterações, branches, mesclagem e comparação de versões anteriores – tudo é otimizado para desempenho. Os algoritmos implementados no Git aproveitam o conhecimento profundo sobre atributos comuns de árvores de arquivos de código-fonte reais, como costumam ser modificados ao longo do tempo e quais são os padrões de acesso.
                                Diferente de alguns softwares de controle de versão, o Git não se deixa enganar pelos nomes dos arquivos ao determinar qual deve ser o armazenamento e o histórico de versões da árvore de arquivos. Em vez disso, o Git se concentra no conteúdo do arquivo. Afinal, os arquivos de código-fonte são renomeados, divididos e reorganizados com frequência. O formato do objeto dos arquivos de repositório do Git usa uma combinação de codificação delta (armazenamento de diferenças de conteúdo) e compactação e armazena com clareza o conteúdo do diretório e os objetos de metadados da versão.</p>
                        </div>
                        <div class="col">
                            <h2>Segurança</h2>
                            <p>O Git foi projetado com a integridade do código-fonte gerenciado como uma prioridade. O conteúdo dos arquivos, bem como os verdadeiros relacionamentos entre arquivos e diretórios, versões, tags e commits, todos esses objetos no repositório do Git são protegidos com um algoritmo de hash de criptografia seguro chamado SHA1. Isso protege o código e o histórico de alterações contra alterações acidentais e maliciosas e garante que o histórico tenha rastreabilidade total.

                                Com o Git, você pode ter certeza de ter um histórico de conteúdo autêntico do código-fonte. Alguns outros sistemas de controle de versão não têm proteções contra alterações secretas posteriores. Isso pode ser uma vulnerabilidade séria de segurança das informações para qualquer empresa que depende do desenvolvimento de software.</p>
                        </div>
                    </div>
                    <div class="row text-center m:auto">
                        <div class="col">
                            <h2>Flexibilidade</h2>
                            <p>Um dos principais objetivos de design do Git é a flexibilidade. O Git é flexível em vários aspectos: suporte a vários tipos de fluxos de trabalho de desenvolvimento não lineares, em eficiência em projetos pequenos e grandes e em compatibilidade com muitos sistemas e protocolos existentes.
                                O Git foi projetado para tratar os branches e tags como cidadãos de primeira classe (ao contrário do SVN) e operações que afetam branches e tags (como mesclagem ou reversão) também são armazenadas como parte do histórico de alterações. Nem todos os sistemas de controle de versão apresentam esse nível de rastreamento.</p>
                        </div>                       
                    </div>
                    <br />
                    <h2 class="text-center badge-pill badge-secondary p-sm-2">IDEs E PROGRAMAS PARA UTILIZAÇÃO DO GIT: </h2>
                    <div class="row">
                        <div class="col-3"><img class="img-fluid" src="../plugins/img/beans.png" alt="" /></div>
                        <div class="col-3"><img class="img-fluid" src="../plugins/img/logo-eclipse.png" alt="" /></div>
                        <div class="col-3"><img class="img-fluid" src="../plugins/img/vscode.jpg" alt="" /></div>
                        <div class="col-3"><img class="img-fluid" src="../plugins/img/git.jpg" alt="" /></div>
                    </div>
                    <div class="row badge-primary p-sm-2">
                        <div class="col">
                            <a class="btn btn-primary" href="https://netbeans.org/downloads/8.2/rc/" role="button">Netbeans IDE</a>                                                                                                                
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="https://www.eclipse.org/downloads/" role="button">Eclipse IDE</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="https://code.visualstudio.com/download">VS code</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="https://gitforwindows.org/" role="button">Git</a>
                        </div>
                    </div>
                    <hr />
                    <br />
                    <h2 class="text-center badge-pill badge-info p-sm-2">NA PRÁTICA</h2>
                    <p>A seguir, irei mostrar na pr?tica e de maneira ilustrativa e din?mica de como funciona o git nas seguintes IDEs, como instalar as ferramentas Git e como enviar seu projeto para o site github.</p>            
                    <p>No primeiro caso, irei demonstrar na IDE do Netbeans R.C., junto com o emulador local Laragon, mas, antes de tudo, precisamos instalar os plugins na IDE para que assim as ferramentas Git sejam utilizadas: </p>          

                    <h3 class="text-center badge-pill badge-dark p-sm-2">PASSO-A-PASSO: </h3>

                    <p>Logo ap?s abrir o Netbeans RC, clicando na op??o ferramentas voc? precisar? baixar alguns plugins e instal?-los para utilizar o git, pois, apenas assim poder? desfrutar das ferramentas. Veja os passos a seguir para instalar os plugins:</p> 

                    <div class="col m-auto">
                        <div class="row">
                            <div class="col">
                                <small><b>1- Para iniciar, abra o netbeans(ou qualquer ide):</b></small>
                                <img class="img-fluid" src="plugins/img/passo1.png" alt="" />                                                         
                            </div>
                            <div class="col">
                                <small><b>2- v? em ferramentas</b></small>
                                <img class="img-fluid" src="plugins/img/passo2.png" alt="" />                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <small><b>3- Plug-ins dispon?veis:</b></small>
                                <img class="img-fluid" src="plugins/img/passo3.png" alt="" />
                            </div>
                            <div class="col">
                                <small><b>4-Na barra de pesquisa, escreva git: </b></small>
                                <img class="img-fluid" src="plugins/img/passo5.png" alt="" />
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="col">
                                <small><b>5- Clique em Pr?ximo:</b></small>
                                <img class="img-fluid" src="plugins/img/passo8.png" alt="" />
                            </div>
                            <div class="col">
                                <small><b>6- Em seguida, instalar:</b></small>
                                <img class="img-fluid" src="plugins/img/passo11.png" alt="" /> 
                            </div>                                                        
                        </div>
                        <div class="row">
                            <div class="col">
                                <small><b>7-Continuar:</b></small>
                                <img class="img-fluid" src="plugins/img/passo12.png" alt="" />
                                <img class="img-fluid" src="plugins/img/passo14.png" alt="" />
                            </div>                                
                            <div class="col">
                                <small><b>8-Finalizar e fechar a janela:</b></small>          
                                <img class="img-fluid" src="plugins/img/passo13.png" alt="" />                                                                  
                            </div>                                                                               
                        </div>                                                                      
                    </div>              
                </div>                
            </div>
            <hr />
            <br />
            <h2 class="badge-primary p-sm-2  text-center">Tutoriais</h2>
            <div class="row">
                <div class="col-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2alg7MQ6_sI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FV-hMoqHtcU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col text-center m-auto">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CGTsIz5t0eY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>                    
            </div> 
            <h3 class="text-center badge-pill badge-success">CONCLUSÃO</h3>
            <p class="text-center">O Git é um projeto de código aberto muito bem suportado, com mais de uma década de administração sólida. Os mantenedores do projeto mostraram um julgamento equilibrado e uma abordagem madura para atender às necessidades de longo prazo dos usuários, com lançamentos regulares que melhoram a usabilidade e a funcionalidade. É fácil examinar a qualidade do software de código aberto, e inúmeras empresas dependem muito dessa qualidade.

                O Git tem excelente suporte da comunidade e uma vasta base de usuários. A documentação é excelente e abundante, incluindo livros, tutoriais e sites dedicados. Existem também podcasts e tutoriais em vídeo.</p>
 </div>