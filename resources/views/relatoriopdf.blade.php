<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Courier New', Courier, monospace;
    }



    #relatorioMensal {
        height: 350px;
        border-top: 30px solid#4d8b31;
        border-bottom: 30px solid#4d8b31;

    }

    .titulo {
        color: #63625b;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 60px;
        font-weight: bold;
        margin-top: 80px;
        margin-left: 50px;
        position: absolute;

    }

    #topSubtitulos {
        height: 350px;
        border-top: 30px solid#63625b;
        border-bottom: 30px solid#63625b;

    }

    .subtitulos {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 60px;
        font-weight: bold;
        color: #4d8b31;
        position: absolute;
        margin-left: 20px;

    }

    #logo {
        position: absolute;
        width: 150px;
        margin-left: 943px;
        margin-top: 244px;
    }

    .date {
        position: absolute;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: bold;
        margin-top: 295px;
        margin-left: 400px;
        font-size: 20px;
        color: white;
    }

    .colors {
        position: absolute;
        color: #4d8b31;
        height: 1000px;
    }

    .legenda {
        color: black;
        background-color: #e0e0e0;
        font-family: 'Courier New', Courier, monospace;
    }

    .img {
        opacity: 0.2;
        position: absolute;
        width: 1115px;
        height: 300px;
        z-index: -1;
    }

    ol {
        list-style-type: none;
    }

    .th {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        font-size: 25px;
        color: white;


    }

    th {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;


    }

    #circulos {
        padding: 20px;
    }

    .circulo {
        background: lightblue;
        border-radius: 50%;
        border: 2px solid black;
        width: 200px;
        height: 200px;
    }

    .reunioes {
        display: flex;
        justify-content: center;

    }

    .p_circulos {
        margin-top: 210px;
        margin-left: 50px;
    }
    .quadrados{
        margin-top:20px;
        position: absolute;

    }
    .quadrado {
        width: 25px;
        height: 40px;
        position: absolute;
    }
</style>

<body>
    <div class="container">
        <div id="relatorioMensal" class="cabecalho ">
            <h1 class="titulo">Relatório Prospect Brasil</h1>
            <h3 class="date">PERIODO: 01/02/2022 À 15/05/2022</h3>
            <div class="quadrados">
                <div class="quadrado" style="background-color: #4d8b31; ;">
                </div>
                <div class="quadrado" style="background-color: #545454; margin-top:50px">
                </div>
                <div class="quadrado" style="background-color: #747368; margin-top:100px">
                </div>
                <div class="quadrado" style="background-color: #a6a6a6; margin-top:150px">
                </div>
                <div class="quadrado" style="background-color: #c6c3c3; margin-top:200px">
                </div>
            </div>
            
            <img id="logo"
                src="https://static.wixstatic.com/media/96e5b6_d1427101ce0f4f4b98a1fcc89a4b5f2a~mv2.png/v1/fill/w_500,h_110,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo%20Uso%20Digital%20-%20Prospect%20-%20Tamanho%20Gr.png"
                alt="logoProspect">
            <img class="img" style="no-repeat"
                src="https://andrebona.com.br/wp-content/uploads/2022/08/6-Dicas-para-organizar-as-financas-em-tempos-de-inflacao-alta-1.png"
                alt="">
        </div>
        <br>

        <div class="indice" style="page-break-before: always;">
            <br>
            <p class='legenda'>O relatório mensal tem como objetivo apresentar os resultados do mês trabalhado pela
                Prospect
                Brasil com seu respectivo projeto. A leitura do mesmo é dividida em três partes na qual
                conseguimos mensurar o andamento e alinhar para chegar ao objetivo.</p>
            <br>
            <ol>
                <li>1. Legenda:</li>
                <br>
                <li>2. Reuniões:</li>
                <li>2.1 Realizadas;</li>
                <li>2.1.1 Agendadas em meses anteriores;</li>
                <li>2.1.2 Agendadas no mês;</li>
                <li>2.2 Oportunidades no mês;</li>
                <li>2.3 Previstas (agendadas no mês referência);</li>
                <li>2.4 Segmentos (CNAE);</li>
                <li>2.5 Regiões;</li>
                <li>2.6 Aguardando nova data(com resumo atualizado);</li>
                <br>
                <li>3. Capilaridade(empresas contatadas):</li>
                <li>3.1 Em andamento;</li>
                <li>3.2 Retorno futuro;</li>
                <li>3.3 Aguardar retorno;</li>
                <li>3.4 Sem perfil (com resumo e quando for indicação);</li>
                <li>3.5 Sem interesse (com resumo);</li>
                <li>3.6 Segmentos;</li>
                <li>3.6 Segmentos;</li>
                <li>3.7 Regiões;</li>
                <br>
                <li>4. Considerações finais:</li>
                <li>4.1 Reuniões agendadas;</li>
                <li>4.2 Realizadas;</li>
                <li>4.3 Oportunidades;</li>
                <li>4.4.Previstas;</li>
                <li>4.5 Em andamento;</li>
                <li>4.6 Retorno futuro;</li>
            </ol>
            <img align="right" src="{{ url('storage/img/boraprospectar.png') }}">
        </div>
        <table class="table table-striped" style="page-break-before: always;">
            <thead>
                <tr style="background-color:#4d8b31;">
                    <th class="th" colspan="2" style="text-align: center;">Legenda dos Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Em andamento</td>
                    <td>Entrei em contato, mas ainda não localizei a pessoa certa (decisor);
                        Entrei em contato com o prospect, enviei e-mail e fiquei de retornar;
                        Entrei em contato, localizei a pessoa certa porém não falei com ela.</td>
                </tr>
                <tr style="background-color:#e7e7e7;">
                    <td>Retorno futuro</td>
                    <td>Entrei em contato com o prospect, ele pediu retorno em alguns dias/meses.</td>
                </tr>
                <tr>
                    <td>Aguardar retorno</td>
                    <td>Entrei em contato com o prospect, enviei e-mail, e após o follow-up ele pediu
                        para aguardar o retorno.</td>
                </tr>
                <tr style="background-color:#e7e7e7;">
                    <td>Reunião agendada (realizada/previstas)</td>
                    <td>Entrei em contato com o prospect, ele pede para agendarmos uma visita
                        para conhecer nossas soluções.</td>
                </tr>
                <tr>
                    <td>Oportunidade</td>
                    <td>Imediata ou futura, mas sem agendamento. Identificado e repassado para
                        acompanhamento.</td>
                </tr>
                <tr style="background-color:#e7e7e7;">
                    <td>Sem interesse</td>
                    <td>Entrei em contato com o prospect, ele disse que para o momento não tem
                        interesse;
                        Motivos diversos: já tem fornecedor, sem verba, não utiliza esses
                        serviços/produtos, etc.
                        Contatos sem interesse são programados para retornos periódicos.</td>
                </tr>
                <tr>
                    <td>Sem Perfil</td>
                    <td>Empresas que não tem o perfil de utilização dos serviços prestados.</td>
                </tr>
            </tbody>
        </table>

        <div id="topSubtitulos" class="cabecalho" style="page-break-before: always;">
            <h1 class="subtitulos">Reuniões</h1>
            <img id="logo"
                src="https://static.wixstatic.com/media/96e5b6_d1427101ce0f4f4b98a1fcc89a4b5f2a~mv2.png/v1/fill/w_500,h_110,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo%20Uso%20Digital%20-%20Prospect%20-%20Tamanho%20Gr.png"
                alt="logoProspect">
            <img class="img" style="no-repeat"
                src="https://andrebona.com.br/wp-content/uploads/2022/08/6-Dicas-para-organizar-as-financas-em-tempos-de-inflacao-alta-1.png"
                alt="">
        </div>
        <div id="circulos" class="reunioes row">
            <div class="circulo mr-2">
                <p class="p_circulos">Realizadas</p>
            </div>
            <div class="circulo mr-2">
                <p class="p_circulos">Oportunidades</p>
            </div>
            <div class="circulo ml-2">
                <p class="p_circulos">Previstas</p>
            </div>
            <div class="circulo ml-2">
                <p class="p_circulos">Aguardando nova data</p>
            </div>

        </div>
        <br><br>
        <div id="circulos" class="reunioes row">
            <div class="circulo mr-2">
                <p class="p_circulos">Segmentos</p>
            </div>
            <div class="circulo mr-2">
                <p class="p_circulos">Regiões</p>
            </div>

        </div>
        <br>
        <br>
        <table class="table table-striped" style="page-break-before: always;">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Realizadas</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Agendadas em meses anteriores</th>
                    <th width="50%" style="text-align: center;">Data da reunião</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Agendadas no mês atual </th>
                    <th width="50%" style="text-align: center;">Data da reunião</th>
                </tr>

                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Oportunidades</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Oportunidade</th>
                    <th width="50%" style="text-align: center;">Data da Oportunidade</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Previstas</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Agendadas no mês atual</th>
                    <th width="50%" style="text-align: center;">Data da reunião</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>

        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Segmentos</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Agendadas no mês atual</th>
                    <th width="50%" style="text-align: center;">Segmento</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>

        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Regiões</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Agendadas no mês atual</th>
                    <th width="50%" style="text-align: center;">Região</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>

        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Aguardando nova data</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Agendadas geral</th>
                    <th width="50%" style="text-align: center;">Resumo do último contato</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>

        <div id="topSubtitulos" class="cabecalho" style="page-break-before: always;">
            <h1 class="subtitulos">Capilaridade</h1>
            <img id="logo"
                src="https://static.wixstatic.com/media/96e5b6_d1427101ce0f4f4b98a1fcc89a4b5f2a~mv2.png/v1/fill/w_500,h_110,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo%20Uso%20Digital%20-%20Prospect%20-%20Tamanho%20Gr.png"
                alt="logoProspect">
            <img class="img" style="no-repeat"
                src="https://andrebona.com.br/wp-content/uploads/2022/08/6-Dicas-para-organizar-as-financas-em-tempos-de-inflacao-alta-1.png"
                alt="">

        </div>
        <div id="circulos" class="reunioes row">
            <div class="circulo mr-2">
                <p class="p_circulos">Em andamento</p>
            </div>
            <div class="circulo mr-2">
                <p class="p_circulos">Retorno futuro</p>
            </div>
            <div class="circulo ml-2">
                <p class="p_circulos">Aguardando retorno</p>
            </div>
            <div class="circulo ml-2">
                <p class="p_circulos">Sem perfil</p>
            </div>
            <div class="circulo ml-2">
                <p class="p_circulos">Sem interesse</p>
            </div>

        </div>
        <br><br>
        <div id="circulos" class="reunioes row">
            <div class="circulo mr-2">
                <p class="p_circulos">Segmento</p>
            </div>
            <div class="circulo mr-2">
                <p class="p_circulos">Região</p>
            </div>

        </div>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#434343;">
                    <th class="th" colspan="2" style="text-align: center;">Em Andamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Retorno Futuro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Aguardar Retorno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Sem Perfil</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Empresa</th>
                    <th width="50%" style="text-align: center;">Resumo do Contrato</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Sem Interesse</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#d9d9d9;">
                    <th width="50%" style="text-align: center;">Empresa</th>
                    <th width="50%" style="text-align: center;">Resumo do Contrato</th>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Segmentos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Regiões</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
                <tr>
                    <td width="50%" style="text-align: center;"></td>
                    <td width="50%" style="text-align: center;"></td>
                </tr>
            </tbody>
        </table>
        <br><br>

        <div id="topSubtitulos" class="cabecalho" style="page-break-before: always">
            <h1 class="subtitulos">Considerações Finais</h1>
            <img id="logo"
                src="https://static.wixstatic.com/media/96e5b6_d1427101ce0f4f4b98a1fcc89a4b5f2a~mv2.png/v1/fill/w_500,h_110,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo%20Uso%20Digital%20-%20Prospect%20-%20Tamanho%20Gr.png"
                alt="logoProspect">
            <img class="img" style="no-repeat"
                src="https://andrebona.com.br/wp-content/uploads/2022/08/6-Dicas-para-organizar-as-financas-em-tempos-de-inflacao-alta-1.png"
                alt="">

        </div>
        <br><br>
        <table class="table table-striped ">
            <thead>
                <tr style="background-color:#999999;">
                    <th class="th" colspan="2" style="text-align: center;">Numeros</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Total de contatos</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Reuniões realizadas(agendadas em meses anteriores)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Reuniões realizadas(agendadas no mês atual)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oportunidades</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Reuniões previstas</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Em andamento</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Retorno futuro</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aguardar retorno</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sem perfil</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sem interesse</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
