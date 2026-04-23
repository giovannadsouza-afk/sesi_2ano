//Giovanna
//Snake_case

<?php
$Boas_Vindas = "Seja bem vindo ao Sistema para conhcer e entender mais sobre Política de Segurança da Informação \n";

$Objetivos_da_Psi = "Os principais objetivos de uma Política de Segurança da Informação incluem assegurar a confidencialidade, integridade e disponibilidade das informações:A confidencialidade garante que a informação seja acessível apenas a pessoas autorizadas, protegendo dados sensíveis contra acessos não autorizados.A integridade visa assegurar que a informação seja precisa e confiável, protegendo contra alterações não autorizadas e mantendo a veracidade dos dados. A disponibilidade garante que a informação esteja acessível quando necessário, evitando interrupções e garantindo acesso contínuo aos usuários autorizados.";

$Responsabilidades = "A gestão da política de segurança da informação é uma responsabilidade compartilhada.
Embora o setor de TI e os times especializados de segurança sejam protagonistas na implementação e monitoramento das práticas, a alta liderança deve aprovar e sustentar as diretrizes, garantindo recursos e apoio institucional. Por isso, a PSI deve ser elaborada por equipes multidisciplinares, com representantes de áreas como:

– TI: para aspectos técnicos de cibersegurança.

– Compliance e jurídico: para alinhamento à legislação e auditorias internas ou externas.

– RH: para políticas de conduta, treinamentos de conscientização e guias de boas práticas desde o onboarding.

– Operações e gestão: para garantir aderência aos processos internos.

Por fim, cada colaborador é também responsável por seguir as diretrizes definidas e adotar boas práticas de cibersegurança no dia a dia, como uso de senhas fortes, não compartilhamento de credenciais e atenção a tentativas de phishing. O fator humano é reconhecido como uma das principais falhas desta estratégia, destacando a relevância de capacitações e guias de conduta.";

$Consequencia = "As consequências em tópicos : Multas e sanções , Danos à reputação , Disputas Legais por fim a conclusão é :
É evidente que o descumprimento pode ter consequências graves. As empresas devem garantir que cumprem todas as leis de proteção de dados para evitar multas, danos à reputação e litígios judiciais. É essencial que as empresas considerem a proteção de dados um fator crucial em suas operações comerciais e garantam que todos os funcionários estejam cientes da importância das leis de proteção de dados. A proteção de dados não deve ser vista como uma obrigação onerosa, mas sim como um elemento necessário para conquistar a confiança de clientes e parceiros e garantir o sucesso dos negócios.";


$escolha = 0;


$Credenciais = readline("Digite suas credenciais \n ");
echo "Suas credenciais são :  \n ", $Credenciais;

echo $Boas_Vindas;
echo " n  Digite 1 para : Objetivos da PSI  \n";
echo "  Digite 2 Responsabilidades\n ";
echo "   Digite 3 Consequências do descumprimento \n";
echo "    Digite 4 Para sair  \n";

$pergunta  = readline("Escolha uma opção : \n ");

switch ($pergunta) {

    case 1:
        echo "\nResultado ", ($Objetivos_da_Psi);
        break;

    case 2:
        echo "\nResultado ", ($Responsabilidades);
        break;

    case 3:
        echo "\nResultado ", ($Consequencia);
        break;

    case 4:
        echo "Saindo ... ";
        break;
    default:
        echo "Erro ... ";
        break;
}


?>