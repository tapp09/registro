<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&family=Titillium+Web:wght@700&display=swap"
    rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROCEDIMENTOS</title>

  <link rel="stylesheet" href="./assets/css/style-dash.css">
</head>

<body>
  <main id="app">
    <form>
      <div class="step-progress">
        <strong class="active" data-step>Cadastro Paciente</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Hospital</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Códigos</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Ocorrências</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Problemas Suspeitos</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Sinais e Sintomas</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Avaliação do Paciente</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Sinais Vitais</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Local dos Ferimentos</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Queimaduras</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Condução</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Vítima</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Objetos</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Equipe</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Procedimentos</strong>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.41663 2L6.41663 7L1.41663 12" stroke="#323238" stroke-width="2" stroke-linecap="square" />
        </svg>

        <strong data-step>Foto</strong>
      </div>

<!-- CADASTRO PACIENTE-->

      <div class="form-step active">
        <div class="content">
          <div class="input-wrapper">
            <label for="name">Nome Paciente</label>
            <input id="name" name="name" type="text" placeholder="Nome do Paciente" required>
          </div>

          <div class="input-wrapper">
            <label for="phone">Telefone</label>
            <input id="phone" name="phone" type="text" onkeypress="return /\d/.test(event.key)"
              placeholder="47988653244">
          </div>

          <div class="input-wrapper">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" required placeholder="128.838.423-54">
          </div>

          <div class="input-wrapper">
            <label for="idade">IDADE</label>
            <input type="text" id="idade" name="idade" required placeholder="25">
          </div>

          <div class="input-wrapper">
            <label for="genero">SEXO</label>
            <input type="radio" name="genero" value="masculino"> M
            <input type="radio" name="genero" value="feminino"> F
          </div>

          <div class="input-wrapper">
            <label for="nome-acompanhante">NOME ACOMPANHANTE </label>
            <input type="text" id="nome-acompanhante" name="nome-acompanhante" placeholder="Nome do Acompanhante" >
          </div>

          <div class="input-wrapper">
            <label for="idade-acompanhante">IDADE ACOMPANHANTE </label>
            <input type="text" id="idade-acompanhante" name="idade-acompanhante" placeholder="Idade do Acompanhante">
          </div>

        </div>
        <div class="button-wrapper justify-end">
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL CADASTRO PACIENTE-->


      <!-- HOSPITAL-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label for="hospital">HOSPITAL</label>
            <input type="text" id="hospital" name="hospital" required placeholder="Qual é o nome do hospital?">
          </div>

          <div class="input-wrapper">
            <label for="local">LOCAL OCORRÊNCIA</label>
            <textarea rows="4" cols="50" id="local" name="local" required class="lo"></textarea>
          </div>

          <div class="input-wrapper">
            <label for="data">DATA</label>
            <input type="date" id="data" name="data" required class="data">
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL HOSPITAL-->


      <!-- CÓDIGOS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label for="usb">Nº USB</label>
            <input type="text" id="usb" name="usb" required>
          </div>

          <div class="input-wrapper">
            <label for="ocorre">Nº OCORRÊNCIA</label>
            <input type="text" id="ocorre" name="ocorre" required>
          </div>

          <div class="input-wrapper">
            <label for="desp">DESP</label>
            <input type="text" id="desp" name="desp" required>
          </div>

          <div class="input-wrapper">
            <label for="ch">H.CH</label>
            <input type="text" id="ch" name="ch" required>
          </div>

          <div class="input-wrapper">
            <label for="sus">CÓD SIA/SUS </label>
            <input type="text" id="sus" name="sus">
          </div>

          <div class="input-wrapper">
            <label for="kmfinal">KM FINAL </label>
            <input type="text" id="kmfinal" name="kmfinal">
          </div>

          <div class="input-wrapper">
            <label for="codigo-ir">CÓD IR</label>
            <input type="text" id="codigo-ir" name="codigo-ir">
          </div>

          <div class="input-wrapper">
            <label for="codigo-ps">CÓD PS</label>
            <input type="text" id="codigo-ps" name="codigo-ps">
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL CÓDIGOS-->

      <!-- OCORRÊNCIAS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <div class="checkbox-list">
              <label><input type="checkbox"><span class="tiposocorrencias">CAUSADO POR ANIMAIS</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">COM MEIO DE TRANSPORTE</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">DESMORONAMENTO / DESLIZAMENTO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">EMERGÊNCIA MÉDICA</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">QUEDA DE ALTURA 2M</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">TENTATIVA DE SUICÍDIO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">QUEDA PRÓPRIA ALTURA</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">AFOGAMENTO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">AGRESSÃO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">ATROPELAMENTO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">DOMÉSTICO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">ESPORTIVO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">INTOXICAÇÃO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">QUEDA BICICLETA</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">QUEDA MOTO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">QUEDA NÍVEL +2M </span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">TRABALHO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">TRANSFERÊNCIA</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">CHOQUE ELÉTRICO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">DESABAMENTO</span></label>
              <label><input type="checkbox"><span class="tiposocorrencias">nada</span></label>
          </div>
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL OCORRÊNCIAS-->

      <!-- PROBLEMAS SUSPEITOS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label><input type="checkbox"><span class="problemas">PSIQUIÁTRICOS</span></label>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="problemas">RESPIRATORIOS</span></label>
            <div class="suboptions respiratorios">
                <label><input type="checkbox"><span class="problemas">DPOC</span></label>
                <label><input type="checkbox"><span class="problemas">INALAÇÃO DE FUMAÇA</span></label>
            </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="problemas">RESPIRATORIOS</span></label>
            <div class="suboptions respiratorios">
                <label><input type="checkbox"><span class="problemas">DPOC</span></label>
                <label><input type="checkbox"><span class="problemas">INALAÇÃO DE FUMAÇA</span></label>
            </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="problemas">DIABETES</span></label>
              <div class="suboptions diabetes">
                  <label><input type="checkbox"><span class="problemas">HIPERGLICEMIA</span></label>
                  <label><input type="checkbox"><span class="problemas">HIPOGLICEMIA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="problemas">OBSTÉTRICO</span></label>
              <div class="suboptions obstetricos">
                  <label><input type="checkbox"><span class="problemas">PARTO EMERGENCIAL</span></label>
                  <label><input type="checkbox"><span class="problemas">GESTANTE</span></label>
                  <label><input type="checkbox"><span class="problemas">HEMOR. EXCESSIVA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="problemas">TRANSPORTE</span></label>
              <div class="suboptions transporte">
                  <label><input type="checkbox"><span class="problemas">AÉREO</span></label>
                  <label><input type="checkbox"><span class="problemas">CLÍNICO</span></label>
                  <label><input type="checkbox"><span class="problemas">EMERGENCIAL</span></label>
                  <label><input type="checkbox"><span class="problemas">PÓS-TRAUMA</span></label>
                  <label><input type="checkbox"><span class="problemas">SEM REMOÇÃO</span></label>
                  <label><input type="checkbox"><span class="problemas">OUTRO</span></label>
                  <input type="text" id="outrot" name="outrot">
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox" id="outrosCheckbox"><span class="problemas">OUTROS PROBLEMAS</span></label>
            <input type="text" id="outrosInput" class="outros-input text-input" placeholder="Informe outros problemas" disabled>
          </div>

          <div class="button-wrapper">
            <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
            <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
          </div>
        </div>
        
      </div>

      <!-- FINAL PROBLEMAS SUSPEITOS-->


      <!-- SINAIS E SINTOMAS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">ABDOMEM SENSIVEL OU RÍGIDO</span></label>
            <label><input type="checkbox"><span class="sintomas">AFUNDAMENTO DE CRÂNIO</span></label>
            <label><input type="checkbox"><span class="sintomas">AGITAÇÃO</span></label>
            <label><input type="checkbox"><span class="sintomas">AMNÉSIA</span></label>
            <label><input type="checkbox"><span class="sintomas">ANGINA DE PEITO</span></label>
            <label><input type="checkbox"><span class="sintomas">APINÉIA</span></label>
            <label><input type="checkbox"><span class="sintomas">BRADICARDIA</span></label>
            <label><input type="checkbox"><span class="sintomas">BRADIPNÉIA</span></label>
            <label><input type="checkbox"><span class="sintomas">BRONCO ASPIRANDO</span></label>
            <label><input type="checkbox"><span class="sintomas">CEFALEIA</span></label>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">CIANOSE</span></label>
              <div class="suboptions cianose">
                <label><input type="checkbox"><span class="sintomas">LÁBIOS</span></label>
                <label><input type="checkbox"><span class="sintomas">EXTREMIDADE</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">CONVULSÃO</span></label>
            <label><input type="checkbox"><span class="sintomas">DECORTICAÇÃO</span></label>
            <label><input type="checkbox"><span class="sintomas">DEFORMIDADE</span></label>
            <label><input type="checkbox"><span class="sintomas">DESCEREBRAÇÃO</span></label>
            <label><input type="checkbox"><span class="sintomas">DESMAIO</span></label>
            <label><input type="checkbox"><span class="sintomas">DESVIO DE TRAQUEIA</span></label>
            <label><input type="checkbox"><span class="sintomas">DISPNEIA</span></label>
            <label><input type="checkbox"><span class="sintomas">DOR LOCAL</span></label>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">EDEMA</span></label>
              <div class="suboptions edema">
                <label><input type="checkbox"><span class="sintomas">LOCALIZADO</span></label>
                <label><input type="checkbox"><span class="sintomas">GENERALIZADO</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">ENFISEMA SUBCUTÁNEO</span></label>
            <label><input type="checkbox"><span class="sintomas">ÉSTASE DE JUGULAR</span></label>
            <label><input type="checkbox"><span class="sintomas">FACE PALIDA</span></label>
            <label><input type="checkbox"><span class="sintomas">HEMORRAGIA</span></label>
              <div class="suboptions hemorragia">
                  <label><input type="checkbox"><span class="sintomas">INTERNA</span></label>
                  <label><input type="checkbox"><span class="sintomas">EXTERNA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">HIPERTENSÃO</span></label>
            <label><input type="checkbox"><span class="sintomas">HIPOTENSÃO</span></label>
            <label><input type="checkbox"><span class="sintomas">NAUSEAS E VÓMITOS</span></label>
            <label><input type="checkbox"><span class="sintomas">NASORAGIA</span></label>
            <label><input type="checkbox"><span class="sintomas">OBITO</span></label>
            <label><input type="checkbox"><span class="sintomas">OTORREIA</span></label>
            <label><input type="checkbox"><span class="sintomas">OTORRAGIA</span></label>
            <label><input type="checkbox"><span class="sintomas">O.V.A.C.E</span></label>
            <label><input type="checkbox"><span class="sintomas">PARADA</span></label>
              <div class="suboptions parada">
                  <label><input type="checkbox"><span class="sintomas">CARDÍACA</span></label>
                  <label><input type="checkbox"><span class="sintomas">RESPIRATÓRIA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">PRIAPRISMO</span></label>
            <label><input type="checkbox"><span class="sintomas">PRURIDO NA PELE</span></label>
            <label><input type="checkbox"><span class="sintomas">PUPILAS</span></label>
              <div class="suboptions pupilas">
                  <label><input type="checkbox"><span class="sintomas">ANISOCORIA</span></label>
                  <label><input type="checkbox"><span class="sintomas">ISOCORIA</span></label>
                  <label><input type="checkbox"><span class="sintomas">MIDRIASE</span></label>
                  <label><input type="checkbox"><span class="sintomas">MIOSE</span></label>
                  <label><input type="checkbox"><span class="sintomas">REAGENTE</span></label>
                  <label><input type="checkbox"><span class="sintomas">NÃO REAGENTE</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="sintomas">SEDE</span></label>
            <label><input type="checkbox"><span class="sintomas">SINAL DE BATTLE</span></label>
            <label><input type="checkbox"><span class="sintomas">SUDORESE</span></label>
            <label><input type="checkbox"><span class="sintomas">TAQUIPNEIA</span></label>
            <label><input type="checkbox"><span class="sintomas">TAQUICARDIA</span></label>
            <label><input type="checkbox"><span class="sintomas">TONTURA</span></label>
            <label><input type="checkbox"><span class="sintomas">OUTRO</span></label>
          </div>

          <div class="input-wrapper">
            <input type="text" id="outrosinal" name="outrotsinal">
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL SINAIS E SINTOMAS-->


      <!-- AVALIAÇÃO DO PACIENTE-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <h2>AVALIAÇÃO DO PACIENTE</h2>
            <h3> MAIORES DE 5 ANOS</h3>
          </div>

          <div class="input-wrapper">
            <label for="local">LOCAL OCORRÊNCIA</label>
            <textarea rows="4" cols="50" id="local" name="local" required class="lo"></textarea>
          </div>

          <div class="input-wrapper">
            <h4>ABERTURA OCULAR</h4>
              <div class="checkbox-list">
                  <label><input type="checkbox"><span class="aval5">ESPONTÂNEA</span></label>
                  <label><input type="checkbox"><span class="aval5">COMANDO VERBAL</span></label>
                  <label><input type="checkbox"><span class="aval5">ESTIMULO DOLOROSO</span></label>
                  <label><input type="checkbox"><span class="aval5">NENHUMA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <h4>RESPOSTA VERBAL</h4>
              <div class="checkbox-list">
                  <label><input type="checkbox"><span class="aval5">ORIENTADO</span></label>
                  <label><input type="checkbox"><span class="aval5">CONFUSO</span></label>
                  <label><input type="checkbox"><span class="aval5">PALAVRAS INAPROPRIADAS</span></label>
                  <label><input type="checkbox"><span class="aval5">PALAVRAS INCOMPRIENSSIVEIS</span></label>
                  <label><input type="checkbox"><span class="aval5">NENHUMA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <h4>RESPOSTA MOTORA</h4>
              <div class="checkbox-list">
                  <label><input type="checkbox"><span class="aval5">OBEDECE COMANDOS</span></label>
                  <label><input type="checkbox"><span class="aval5">LOCALIZA DOR</span></label>
                  <label><input type="checkbox"><span class="aval5">MOVIMENTOS DE RETIRADA</span></label>
                  <label><input type="checkbox"><span class="aval5">FLEXÃO ANORMAL</span></label>
                  <label><input type="checkbox"><span class="aval5">EXTENSÃO ANORMAL</span></label>
                  <label><input type="checkbox"><span class="aval5">NENHUMA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <h2>AVALIAÇÃO DO PACIENTE</h2>
            <h3> MENORES DE 5 ANOS</h3>
          </div>

          <div class="input-wrapper">
            <h4>ABERTURA OCULAR</h4>
              <div class="checkbox-list">
                  <label><input type="checkbox"><span class="aval4">ESPONTÂNEA</span></label>
                  <label><input type="checkbox"><span class="aval4">COMANDO VERBAL</span></label>
                  <label><input type="checkbox"><span class="aval4">ESTIMULO DOLOROSO</span></label>
                  <label><input type="checkbox"><span class="aval4">NENHUMA</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <h4>RESPOSTA VERBAL</h4>
              <div class="checkbox-list">
                  <label><input type="checkbox"><span class="aval4">PALAVRAS E FRASES APROPRIADAS</span></label>
                  <label><input type="checkbox"><span class="aval4">PALAVRAS INAPROPRIADAS</span></label>
                  <label><input type="checkbox"><span class="aval4">CHORO PERSISTENTE OU GRITO</span></label>
                  <label><input type="checkbox"><span class="aval4">SONS INCOMPRIENSSIVEIS</span></label>
                  <label><input type="checkbox"><span class="aval4">NENHUMA RESPOSTA VERBAL</span></label>
              </div>
          </div>

          <div class="input-wrapper">
            <h4>RESPOSTA MOTORA</h4>
              <div class="checkbox-list">
                  <label><input type="checkbox"><span class="aval4">OBEDECE PRONTAMENTE</span></label>
                  <label><input type="checkbox"><span class="aval4">LOCALIZA DOR OU ESTIMULO TATIL</span></label>
                  <label><input type="checkbox"><span class="aval4">RETIRADA DO SEGMENTO ESTIMULADO</span></label>
                  <label><input type="checkbox"><span class="aval4">FLEXÃO ANORMAL</span></label>
                  <label><input type="checkbox"><span class="aval4">EXTENSÃO ANORMAL</span></label>
                  <label><input type="checkbox"><span class="aval4">NENHUMA</span></label>
              </div>
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!-- FINAL AVALIAÇÃO DO PACIENTE-->


      <!-- SINAIS VITAIS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label for="pa">PRESSÃO ARTERIAL</label>
            <input placeholder="mmHg" type="text" id="pa" name="pa" required>
          </div>

          <div class="input-wrapper">
            <label for="pulso">PULSO</label>
            <input placeholder="B.C.P.M" type="text" id="pulso" name="pulso" required>
          </div>

          <div class="input-wrapper">
            <label for="resp">RESPIRAÇÃO</label>
            <input placeholder="M.R.M" type="text" id="resp" name="resp" required>
          </div>

          <div class="input-wrapper">
            <label for="sat">SATURAÇÃO</label>
            <input placeholder="%" type="text" id="sat" name="sat" required>
          </div>

          <div class="input-wrapper">
            <label for="hgt">HGT </label>
            <input type="text" id="hgt" name="hgt">
          </div>

          <div class="input-wrapper">
            <div class="form-group">
              <label for="normalCheckbox">Normal</label>
              <input type="checkbox" id="normalCheckbox" name="normalCheckbox">
            </div>
            <div class="form-group">
                <label for="anormalCheckbox">Anormal</label>
                <input type="checkbox" id="anormalCheckbox" name="anormalCheckbox">
            </div>     
          </div>

          <div class="input-wrapper">
            <label for="temp">TEMPERATURA </label>
            <input placeholder="°C" type="text" id="temp" name="temp">
          </div>

          <div class="input-wrapper">
            <label for="perf">PERFUSÃO </label>
            <div class="form-group">
              <label for="normalCheckbox">-2SEG</label>
              <input type="checkbox" id="normalCheckbox" name="normalCheckbox">
            </div>
            <div class="form-group">
                <label for="anormalCheckbox">+2SEG</label>
                <input type="checkbox" id="anormalCheckbox" name="anormalCheckbox">
            </div>  
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!--  FINAL SINAIS VITAIS-->


      <!-- LOCAL DOS FERIMENTOS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label for="lf">LOCAL</label>
            <input placeholder="Digite o local do ferimento" type="text" id="lf" name="lf" required>
            <input placeholder="Digite o local do ferimento" type="text" id="lf" name="lf">
            <input placeholder="Digite o local do ferimento" type="text" id="lf" name="lf">
            <input placeholder="Digite o local do ferimento" type="text" id="lf" name="lf">
            <input placeholder="Digite o local do ferimento" type="text" id="lf" name="lf">
            <input placeholder="Digite o local do ferimento" type="text" id="lf" name="lf">
          </div>

          <div class="input-wrapper">
            <label for="ladof">estrutura</label>
            <input type="text" id="ladof" name="ladof" required>
            <input type="text" id="ladof" name="ladof">
            <input type="text" id="ladof" name="ladof">
            <input type="text" id="ladof" name="ladof">
            <input type="text" id="ladof" name="ladof">
            <input type="text" id="ladof" name="ladof">
          </div>

          <div class="input-wrapper">
            <label for="face">FACE</label>
            <input type="text" id="face" name="face" required>
            <input type="text" id="face" name="face">
            <input type="text" id="face" name="face">
            <input type="text" id="face" name="face">
            <input type="text" id="face" name="face">
            <input type="text" id="face" name="face">
          </div>

          <div class="input-wrapper">
            <label for="tipo">TIPO</label>
            <input type="text" id="tipo" name="tipo" required>
            <input type="text" id="tipo" name="tipo">
            <input type="text" id="tipo" name="tipo">
            <input type="text" id="tipo" name="tipo">
            <input type="text" id="tipo" name="tipo">
            <input type="text" id="tipo" name="tipo">
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL LOCAL DOS FERIMENTOS-->


      <!-- QUEIMADURAS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <h3>1º GRAU</h3>
            <label><input type="checkbox"><span class="queimaduras">CABEÇA</span></label>
            <label><input type="checkbox"><span class="queimaduras">PESCOÇO</span></label>
            <label><input type="checkbox"><span class="queimaduras">T. ANT</span></label>
            <label><input type="checkbox"><span class="queimaduras">T. POS</span></label>
            <label><input type="checkbox"><span class="queimaduras">GENITAIS</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.I.D</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.I.E</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.S.D</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.S.E</span></label>
          </div>

          <div class="input-wrapper">
            <h3>2º GRAU</h3>
            <label><input type="checkbox"><span class="queimaduras">CABEÇA</span></label>
            <label><input type="checkbox"><span class="queimaduras">PESCOÇO</span></label>
            <label><input type="checkbox"><span class="queimaduras">T. ANT</span></label>
            <label><input type="checkbox"><span class="queimaduras">T. POS</span></label>
            <label><input type="checkbox"><span class="queimaduras">GENITAIS</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.I.D</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.I.E</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.S.D</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.S.E</span></label>
          </div>

          <div class="input-wrapper">
            <h3>3º GRAU</h3>
            <label><input type="checkbox"><span class="queimaduras">CABEÇA</span></label>
            <label><input type="checkbox"><span class="queimaduras">PESCOÇO</span></label>
            <label><input type="checkbox"><span class="queimaduras">T. ANT</span></label>
            <label><input type="checkbox"><span class="queimaduras">T. POS</span></label>
            <label><input type="checkbox"><span class="queimaduras">GENITAIS</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.I.D</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.I.E</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.S.D</span></label>
            <label><input type="checkbox"><span class="queimaduras">M.S.E</span></label>
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!-- FINAL QUEIMADURAS-->


      <!-- CONDUÇÃO-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <h3>FORMA DE CONDUÇÃO</h3>
            <label><input type="checkbox"><span class="fconducao">DEITADA</span></label>
            <label><input type="checkbox"><span class="fconducao">SEMI-SENTADA</span></label>
            <label><input type="checkbox"><span class="fconducao">SENTADA</span></label>
          </div>

          <div class="input-wrapper">
            <h3>DECISÃO DE TRANSPORTE</h3>
            <label><input type="checkbox"><span class="dtrans">CRÍTICO</span></label>
            <label><input type="checkbox"><span class="dtrans">INSTÁVEL</span></label>
            <label><input type="checkbox"><span class="dtrans">PARCIALMENTE INSTÁVEL</span></label>
            <label><input type="checkbox"><span class="dtrans">ESTAVEL</span></label>
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!-- FINAL CONDUÇÃO-->


      <!-- VÍTIMA-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <h2>VÍTIMA ERA</h2>
            <label><input type="checkbox"><span class="vitima">PEDESTRE</span></label>
            <label><input type="checkbox"><span class="vitima">CICLISTA</span></label>
            <label><input type="checkbox"><span class="vitima">CONDUTOR MOTO</span></label>
            <label><input type="checkbox"><span class="vitima">PASSAGEIRO MOTO</span></label>
            <label><input type="checkbox"><span class="vitima">CONDUTOR CARRO</span></label>
            <label><input type="checkbox"><span class="vitima">PASSAGEIRO CARRO</span></label>
            <label><input type="checkbox"><span class="vitima">PASSAGEIRO BANCO TRÁS</span></label>
            <label><input type="checkbox"><span class="vitima">GESTANTE</span></label>
            <label><input type="checkbox"><span class="vitima">CLÍNICO</span></label>
            <label><input type="checkbox"><span class="vitima">TRAUMA</span></label>
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!-- FINAL VÍTIMA-->


      <!-- OBJETOS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <h2>OBJETOS RECOLHIDOS</h2>
            <label><input type="checkbox"><span class="objetos">NENHUM</span></label>
            <label><input type="checkbox" id="outrosCheckboxobj"><span class="objetos">SIM</span></label>
            <textarea id="outrosInputobj" class="outros-input text-input" rows="16" placeholder="Informe os objetos" disabled></textarea>
          </div>

          <script>
            const outrosCheckboxobj = document.getElementById('outrosCheckboxobj');
            const outrosInputobj = document.getElementById('outrosInputobj');
        
            outrosCheckboxobj.addEventListener('change', function() {
                outrosInputobj.disabled = !this.checked;
            });
          </script>
        
        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!-- FINAL OBJETOS-->


      <!-- EQUIPE-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label for="medico">M</label>
            <input type="text" id="medico" name="medico">
          </div>

          <div class="input-wrapper">
            <label for="s1">S1</label>
            <input type="text" id="s1" name="s1">
          </div>

          <div class="input-wrapper">
            <label for="s2">S2</label>
            <input type="text" id="s2" name="s2">
          </div>

          <div class="input-wrapper">
            <label for="s3">S3</label>
            <input type="text" id="s3" name="s3">
          </div>

          <div class="input-wrapper">
            <label for="demandante">DEMANDANTE</label>
            <input type="text" id="demandante" name="demandante">
          </div>

          <div class="input-wrapper">
            <label for="equipe">EQUIPE</label>
            <input type="text" id="equipe" name="equipe">
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>


      <!-- FINAL EQUIPE-->


      <!-- PROCEDIMENTOS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <label><input type="checkbox"><span class="procedimentos">ASPIRAÇÃO</span></label>
            <label><input type="checkbox"><span class="procedimentos">AVALIAÇÃO INICIAL</span></label>
            <label><input type="checkbox"><span class="procedimentos">AVALIAÇÃO DIRIGIDA</span></label>
            <label><input type="checkbox"><span class="procedimentos">AVALIAÇÃO CONTINUADA</span></label>
            <label><input type="checkbox"><span class="procedimentos">CHAVE DE RAUTEK</span></label>
            <label><input type="checkbox"><span class="procedimentos">CÂNULA DE GUEDEL</span></label>
            <label><input type="checkbox"><span class="procedimentos">DESOBSTRUÇÃO DE V.A</span></label>
            <label><input type="checkbox"><span class="procedimentos">EMPREGO DO D.E.A</span></label>
            <label><input type="checkbox"><span class="procedimentos">GERENCIAMENTO DE RISCOS</span></label>
            <label><input type="checkbox"><span class="procedimentos">LIMPEZA DE FERIMENTO</span></label>
            <label><input type="checkbox"><span class="procedimentos">CURATIVOS</span></label>
            <label><input type="checkbox"><span class="procedimentos">COMPRESSIVO</span></label>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="procedimentos">ENCRAVAMENTO</span></label>
            <label><input type="checkbox"><span class="procedimentos">OCULAR</span></label>
            <label><input type="checkbox"><span class="procedimentos">QUEIMADURA</span></label>
            <label><input type="checkbox"><span class="procedimentos">SIMPLES</span></label>
            <label><input type="checkbox"><span class="procedimentos">3 PONTAS</span></label>
            <label><input type="checkbox"><span class="procedimentos">IMOBILIZAÇÕES</span></label>
            <label><input type="checkbox"><span class="procedimentos">MEMBRO INF.DIR.</span></label>
            <label><input type="checkbox"><span class="procedimentos">MEMBRO INF.ESQ.</span></label>
            <label><input type="checkbox"><span class="procedimentos">MEMBRO SUP. DIR.</span></label>
            <label><input type="checkbox"><span class="procedimentos">MEMBRO SUP. ESQ.</span></label>
            <label><input type="checkbox"><span class="procedimentos">QUADRIL</span></label>
            <label><input type="checkbox"><span class="procedimentos">CERVICAL</span></label>
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="procedimentos">MACA SOBRE RODAS</span></label>
            <label><input type="checkbox"><span class="procedimentos">MACA RÍGIDA</span></label>
            <label><input type="checkbox"><span class="procedimentos">PONTE</span></label>
            <label><input type="checkbox"><span class="procedimentos">RETIRADO CAPACETE</span></label>
            <label><input type="checkbox"><span class="procedimentos">R.C.P.</span></label>
            <label><input type="checkbox"><span class="procedimentos">ROLAMENTO 90°</span></label>
            <label><input type="checkbox"><span class="procedimentos">ROLAMENTO 180°</span></label>
            <label><input type="checkbox"><span class="procedimentos">TOMADA DECISÃO</span></label>
            <label><input type="checkbox"><span class="procedimentos">TRATADO CHOQUE</span></label>
            <label><input type="checkbox"><span class="procedimentos">USO DE CÂNULA</span></label>
            <label><input type="checkbox"><span class="procedimentos">USO COLAR</span></label>
          </div>

          <div class="input-wrapper">
            <label for="tam">TAM</label>
            <input type="text" id="tam" name="tam">
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="procedimentos">USO KED</span></label>
            <label><input type="checkbox"><span class="procedimentos">USO TTF</span></label>
            <label><input type="checkbox"><span class="procedimentos">VENTILAÇÃO SUPORTE</span></label>
            <label><input type="checkbox"><span class="procedimentos">OXIGENIOTERAPIA</span></label>
          </div>

          <div class="input-wrapper">
            <label for="olpm">LPM:</label>
            <input type="text" id="olpm" name="olpm">
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="procedimentos">REANIMADOR</span></label>
          </div>

          <div class="input-wrapper">
            <label for="rlpm">LPM:</label>
            <input type="text" id="rlpm" name="rlpm">
          </div>

          <div class="input-wrapper">
            <label><input type="checkbox"><span class="procedimentos">MEIOS AUXILIARES</span></label>
            <label><input type="checkbox"><span class="procedimentos">CELESC</span></label>
            <label><input type="checkbox"><span class="procedimentos">DEF. CIVIL</span></label>
            <label><input type="checkbox"><span class="procedimentos">IGP / PO</span></label>
            <label><input type="checkbox"><span class="procedimentos">POLICIA CIVIL</span></label>
            <label><input type="checkbox"><span class="procedimentos">POLICIA MILITAR</span></label>
            <label><input type="checkbox"><span class="procedimentos">PRE</span></label>
            <label><input type="checkbox"><span class="procedimentos">PRF</span></label>
            <label><input type="checkbox"><span class="procedimentos">CIT</span></label>
            <label><input type="checkbox"><span class="procedimentos">SAMU - USA</span></label>
            <label><input type="checkbox"><span class="procedimentos">SAMU - USB</span></label>
          </div>

        </div>
        <div class="button-wrapper">
          <button type="button" class="btn secondary" data-action="prev">VOLTAR</button>
          <button type="button" class="btn primary" data-action="next">CONTINUAR</button>
        </div>
      </div>

      <!-- FINAL PROCEDIMENTOS-->


      <!-- FOTOS-->

      <div class="form-step hide">
        <div class="content">
          <div class="input-wrapper">
            <form id="uploadForm" enctype="multipart/form-data">
              <label for="fileInput" class="custom-file-button">Escolher Arquivos</label>
              <input type="file" id="fileInput" accept="image/*" multiple>
              <br><br>
              <button type="button" id="uploadButton" class="fotoe">Enviar</button>
              <br><br>
              <button type="button" id="clearButton" class="fotol">Limpar</button>
              <br> <br>
              <div id="preview"></div>
               <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            </form>
          </div>

          <!-- FINAL FOTOS-->

          <script src="/assets/js/upload.js"></script>
        </div>

          
      </div>

    </form>
  </main>

  <script src="/assets/js/formscript.js"></script>
</body>

</html>