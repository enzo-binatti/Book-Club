<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar E-book com IA Avançada | Book Club</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --primary: #4361ee;
      --primary-dark: #3a0ca3;
      --secondary: #f68afa;
      --accent: #FD79A8;
      --dark: #212529;
      --light: #f8f9fa;
      --gray: #636E72;
      --light-gray: #DFE6E9;
      --success: #4cc9f0;
      --error: #D63031;
      --warning: #FDCB6E;
      --border-radius: 16px;
      --border-radius-sm: 8px;
      --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      --transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light);
      color: var(--dark);
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      background: white;
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      overflow: hidden;
      position: relative;
    }

    .container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 6px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
    }

    .header {
      padding: 30px 40px;
      text-align: center;
      background: linear-gradient(135deg, rgba(67, 97, 238, 0.05) 0%, rgba(25, 0, 255, 0.05) 100%);
      border-bottom: 1px solid var(--light-gray);
    }

    h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: var(--primary);
      display: inline-flex;
      align-items: center;
      gap: 15px;
    }

    h1 .icon {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .subtitle {
      color: var(--gray);
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto;
    }

    .form-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      padding: 40px;
    }

    @media (max-width: 992px) {
      .form-container {
        grid-template-columns: 1fr;
      }
    }

    .form-section {
      background: white;
      padding: 30px;
      border-radius: var(--border-radius);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
      border: 1px solid var(--light-gray);
      transition: var(--transition);
    }

    .form-section:hover {
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    .form-section h2 {
      font-size: 1.4rem;
      margin-bottom: 25px;
      color: var(--primary-dark);
      display: flex;
      align-items: center;
      gap: 12px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--light-gray);
    }

    .form-section h2 i {
      color: var(--accent);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: 600;
      color: var(--dark);
      font-size: 0.95rem;
    }

    textarea,
    input[type="text"],
    select {
      width: 100%;
      padding: 14px 18px;
      border: 1px solid var(--light-gray);
      border-radius: var(--border-radius-sm);
      font-size: 0.95rem;
      transition: var(--transition);
      background: white;
      resize: vertical;
      min-height: 120px;
      font-family: inherit;
      margin-bottom: 20px;
    }

    textarea:focus,
    input:focus,
    select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 14px 28px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: white;
      border: none;
      border-radius: var(--border-radius-sm);
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
      box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
      width: 100%;
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
      background: linear-gradient(90deg, var(--secondary), var(--primary));
    }

    .btn-secondary {
      background: linear-gradient(90deg, var(--light-gray), var(--gray));
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary:hover {
      background: linear-gradient(90deg, var(--gray), var(--light-gray));
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .preview-section {
      grid-column: span 2;
      background: white;
      border-radius: var(--border-radius);
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
      border: 1px solid var(--light-gray);
    }

    @media (max-width: 992px) {
      .preview-section {
        grid-column: span 1;
      }
    }

    .preview-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 2px solid var(--light-gray);
    }

    .preview-header h2 {
      color: var(--primary-dark);
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .preview-actions {
      display: flex;
      gap: 10px;
    }

    .ebook-preview {
      background: white;
      border-radius: var(--border-radius-sm);
      padding: 40px;
      min-height: 600px;
      max-height: 800px;
      overflow-y: auto;
      border: 1px dashed var(--light-gray);
      position: relative;
    }

    .ebook-title {
      font-size: 2.2rem;
      color: var(--dark);
      margin-bottom: 10px;
      font-weight: 700;
      line-height: 1.3;
      text-align: center;
    }

    .ebook-author {
      color: var(--gray);
      margin-bottom: 30px;
      font-size: 1.1rem;
      font-weight: 500;
      text-align: center;
    }

    .ebook-content {
      text-align: left;
      width: 100%;
      color: var(--dark);
      white-space: pre-wrap;
      line-height: 1.8;
    }

    .empty-state {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: var(--gray);
      height: 500px;
    }

    .empty-state i {
      font-size: 3rem;
      margin-bottom: 20px;
      color: var(--light-gray);
      opacity: 0.7;
    }

    footer {
      text-align: center;
      padding: 25px 40px;
      border-top: 1px solid var(--light-gray);
      color: var(--gray);
      font-size: 0.9rem;
      background: linear-gradient(135deg, rgba(67, 97, 238, 0.03) 0%, rgba(25, 0, 255, 0.03) 100%);
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
    }

    footer a:hover {
      color: var(--accent);
      text-decoration: underline;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-section,
    .preview-section {
      animation: fadeIn 0.5s ease-out forwards;
    }

    .form-section:nth-child(2) {
      animation-delay: 0.1s;
    }

    .preview-section {
      animation-delay: 0.2s;
    }

    .loading {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-weight: 500;
      color: var(--gray);
    }

    .loading i {
      animation: spin 1.5s infinite linear;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .chapter {
      margin-bottom: 40px;
      border-bottom: 1px solid var(--light-gray);
      padding-bottom: 30px;
    }

    .chapter-title {
      font-size: 1.6rem;
      color: var(--primary-dark);
      margin-bottom: 15px;
      font-weight: 600;
      border-left: 4px solid var(--primary);
      padding-left: 15px;
    }

    .chapter-content {
      line-height: 1.8;
      text-align: justify;
      font-size: 1.05rem;
    }

    .chapter-content p {
      margin-bottom: 15px;
    }

    .notification {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 15px 25px;
      border-radius: var(--border-radius-sm);
      background: var(--success);
      color: white;
      box-shadow: var(--box-shadow);
      z-index: 1000;
      transform: translateX(150%);
      transition: transform 0.3s ease;
    }

    .notification.show {
      transform: translateX(0);
    }

    .notification.error {
      background: var(--error);
    }

    .progress-container {
      width: 100%;
      height: 6px;
      background: var(--light-gray);
      border-radius: 3px;
      margin: 20px 0;
      overflow: hidden;
    }

    .progress-bar {
      height: 100%;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      width: 0%;
      transition: width 0.3s ease;
    }

    .stats {
      display: flex;
      gap: 20px;
      margin: 20px 0;
      padding: 15px;
      background: rgba(67, 97, 238, 0.05);
      border-radius: var(--border-radius-sm);
    }

    .stat-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .stat-value {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--primary);
    }

    .stat-label {
      font-size: 0.8rem;
      color: var(--gray);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1><i class="fas fa-brain icon"></i> IA Avançada para E-books</h1>
      <p class="subtitle">Sistema de IA especializado em textos longos, detalhados e com profundidade narrativa</p>
    </div>

    <div class="form-container">
      <div class="form-section">
        <h2><i class="fas fa-edit"></i> Prompt Detalhado</h2>
        <label for="prompt">Descreva em detalhes o que você quer que a IA gere:</label>
        <textarea id="prompt" placeholder="Ex: Uma história épica de fantasia sobre um reino ameaçado por uma antiga profecia, com personagens complexos, conflitos políticos, magia sistemática e um vilão com motivações compreensíveis..."></textarea>
        
        <label for="complexity">Nível de Detalhe:</label>
        <select id="complexity">
          <option value="medium">Médio (2-3 páginas por capítulo)</option>
          <option value="high" selected>Alto (4-5 páginas por capítulo)</option>
          <option value="very-high">Muito Alto (6+ páginas por capítulo)</option>
        </select>
        
        <button id="generateBtn" class="btn"><i class="fas fa-sparkles"></i> Gerar E-book Detalhado</button>
      </div>

      <div class="form-section">
        <h2><i class="fas fa-cog"></i> Configurações Avançadas</h2>
        <label for="title">Título do E-book (opcional)</label>
        <input type="text" id="title" placeholder="Título Gerado pela IA">

        <label for="author">Autor (opcional)</label>
        <input type="text" id="author" placeholder="Book Club AI">

        <label for="language">Idioma</label>
        <select id="language">
          <option value="pt">Português</option>
          <option value="en">Inglês</option>
          <option value="es">Espanhol</option>
        </select>

        <label for="genre">Gênero</label>
        <select id="genre">
          <option value="fantasia">Fantasia</option>
          <option value="scifi">Ficção Científica</option>
          <option value="romance">Romance</option>
          <option value="misterio">Mistério</option>
          <option value="aventura">Aventura</option>
          <option value="drama">Drama</option>
          <option value="historico">Histórico</option>
          <option value="biografia">Biografia</option>
        </select>

        <label for="length">Extensão</label>
        <select id="length">
          <option value="short">Curto (3-5 capítulos)</option>
          <option value="medium" selected>Médio (6-8 capítulos)</option>
          <option value="long">Longo (9-12 capítulos)</option>
          <option value="epic">Épico (13+ capítulos)</option>
        </select>
      </div>

      <div class="preview-section">
        <div class="preview-header">
          <h2><i class="fas fa-eye"></i> Prévia do E-book</h2>
          <div class="preview-actions">
            <button id="downloadBtn" class="btn btn-secondary" disabled><i class="fas fa-download"></i> Baixar</button>
            <button id="regenerateBtn" class="btn btn-secondary"><i class="fas fa-redo"></i> Regenerar</button>
          </div>
        </div>
        
        <div class="stats" id="stats" style="display: none;">
          <div class="stat-item">
            <div class="stat-value" id="wordCount">0</div>
            <div class="stat-label">Palavras</div>
          </div>
          <div class="stat-item">
            <div class="stat-value" id="chapterCount">0</div>
            <div class="stat-label">Capítulos</div>
          </div>
          <div class="stat-item">
            <div class="stat-value" id="pageCount">0</div>
            <div class="stat-label">Páginas Estimadas</div>
          </div>
        </div>
        
        <div class="progress-container">
          <div class="progress-bar" id="progressBar"></div>
        </div>
        
        <div class="ebook-preview" id="ebookPreview">
          <div class="empty-state">
            <i class="fas fa-book-open"></i>
            <p>Aguardando sua descrição detalhada para gerar conteúdo rico...</p>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>© 2025 Book Club | IA Avançada para Textos Longos e Detalhados</p>
    </footer>
  </div>

  <div class="notification" id="notification"></div>

  <script>
    // Sistema de IA Avançada para Textos Longos - Versão Melhorada
    class AdvancedStoryGenerator {
      constructor() {
        this.themes = {
          fantasia: {
            elementos: ["magia", "profecia", "reinos", "criaturas", "artefatos", "deuses", "alianças", "traições"],
            estruturas: ["Jornada do Herói", "Profecia Cumprida", "Guerra entre Reinos", "Busca pelo Artefato"],
            personagens: ["jovem profeta", "rei decadente", "mago ancião", "guerreira destemida", "ladino astuto"],
            namePool: ["Aric", "Elara", "Thorin", "Lirael", "Galdor"]
          },
          scifi: {
            elementos: ["tecnologia", "espaço", "alienígenas", "IA", "realidade virtual", "colonização", "ética tecnológica"],
            estruturas: ["Primeiro Contato", "Rebelião das Máquinas", "Colonização Espacial", "Paradoxo Temporal"],
            personagens: ["piloto de nave", "cientista genial", "androide consciente", "xenobiólogo", "hacker renegado"],
            namePool: ["Elena", "Chen", "Zara", "Jax", "Nova"]
          },
          romance: {
            elementos: ["encontro", "paixão", "obstáculos", "sacrifício", "redenção", "segundas chances"],
            estruturas: ["Inimigos para Amantes", "Amor Proibido", "Triângulo Amoroso", "Reencontro do Destino"],
            personagens: ["alma gêmea", "amor do passado", "rival inesperado", "mentor romântico"],
            namePool: ["Sofia", "Lucas", "Isabella", "Mateo", "Elena"]
          },
          misterio: {
            elementos: ["crime", "pistas", "suspeitos", "reviravoltas", "motivações", "segredos"],
            estruturas: ["Assassinato Misterioso", "Conspiração", "Segredo de Família", "Caso Mal Resolvido"],
            personagens: ["detetive intuitivo", "suspeito improvável", "testemunha silenciosa", "cúmplice relutante"],
            namePool: ["Holmes", "Watson", "Irene", "Moriarty", "Lestrade"]
          },
          aventura: {
            elementos: ["viagem", "desafios", "tesouros", "inimigos", "aliados", "descobertas"],
            estruturas: ["Quest Principal", "Aventura em Terras Desconhecidas", "Sobrevivência", "Resgate"],
            personagens: ["explorador", "companheiro leal", "guia local", "antagonista ambicioso"],
            namePool: ["Indiana", "Lara", "Nathan", "Elena", "Marco"]
          },
          drama: {
            elementos: ["conflitos internos", "relacionamentos", "perdas", "crescimento pessoal", "dilemas morais"],
            estruturas: ["Crise Pessoal", "Conflitos Familiares", "Desafios Sociais", "Redenção"],
            personagens: ["protagonista atormentado", "mentor sábio", "amigo confiável", "rival"],
            namePool: ["Anna", "Karenina", "Vronsky", "Levin", "Kitty"]
          },
          historico: {
            elementos: ["eventos reais", "figuras históricas", "períodos", "culturas", "guerras", "revoluções"],
            estruturas: ["Ascensão ao Poder", "Batalha Decisiva", "Intrigas de Corte", "Descoberta Histórica"],
            personagens: ["líder histórico", "conselheiro", "rebelde", "espião"],
            namePool: ["Napoleon", "Josephine", "Caesar", "Cleopatra", "Alexander"]
          },
          biografia: {
            elementos: ["vida real", "conquistas", "desafios", "influências", "legado"],
            estruturas: ["Infância e Formação", "Ascensão Profissional", "Desafios e Superações", "Legado Final"],
            personagens: ["biografado", "familiares", "mentores", "rivais"],
            namePool: ["Einstein", "Curie", "Tesla", "Edison", "Da Vinci"]
          }
        };

        this.expansions = {
          fantasia: [
            " Nas tavernas da cidade baixa, os bardos já cantavam versos sobre os sinais que anunciavam tempos de mudança. Os ferreiros trabalhavam febrilmente, suas forjas acesas dia e noite para atender à demanda crescente por armas e armaduras.",
            " Até mesmo os animais pareciam sentir a tensão no ar - os cavalos estavam mais arredios, os cães uivavam à lua com mais frequência. Os camponeses que viviam próximo à floresta ancestral relatavam sons estranhos e luzes dançantes entre as árvores antigas.",
            " Os magos do conselho reuniam-se em segredo, consultando tomos antigos em busca de respostas para os presságios que assombravam seus sonhos."
          ],
          scifi: [
            " Enquanto isso, nos laboratórios de pesquisa, os cientistas debatiam fervorosamente sobre as implicações da descoberta. Dados preliminares sugeriam que a anomalia poderia ser uma forma de portal ou talvez uma manifestação de tecnologia tão avançada que parecia magia.",
            " Os engenheiros checavam e rechecavam os sistemas da nave, conscientes de que qualquer erro poderia ser catastrófico nas proximidades de fenômenos energéticos desconhecidos.",
            " A tensão era palpável em todos os decks, desde a ponte de comando até os compartimentos de carga mais isolados, com a tripulação questionando o futuro da humanidade."
          ],
          romance: [
            " Memórias do passado invadiam sua mente, recordando momentos de felicidade que agora pareciam distantes. O conflito interno entre o dever e o desejo tornava cada decisão mais difícil.",
            " Encontros casuais revelavam camadas inesperadas de personalidade, aprofundando a conexão de maneiras imprevisíveis.",
            " Obstáculos externos, como diferenças sociais ou segredos familiares, testavam a força do laço que se formava."
          ],
          misterio: [
            " Pistas sutis começavam a se conectar, formando um padrão que apontava para uma conspiração maior do que imaginado.",
            " Suspeitos apresentavam álibis que pareciam sólidos, mas pequenas inconsistências levantavam dúvidas.",
            " Reviravoltas inesperadas mudavam o curso da investigação, forçando o detetive a reconsiderar todas as evidências."
          ],
          aventura: [
            " A jornada levava através de terrenos perigosos, onde armadilhas antigas aguardavam os desavisados.",
            " Aliados improváveis se juntavam ao grupo, trazendo habilidades únicas que provariam cruciais.",
            " Descobertas de tesouros perdidos revelavam segredos de civilizações esquecidas."
          ],
          drama: [
            " Conflitos internos atormentavam o protagonista, questionando escolhas passadas e futuras.",
            " Relacionamentos familiares se tensionavam, revelando feridas antigas que precisavam ser curadas.",
            " Dilemas morais forçavam decisões difíceis, com consequências que ecoariam por gerações."
          ],
          historico: [
            " Eventos históricos se desdobravam com precisão, influenciados por figuras chave da época.",
            " Guerras e revoluções moldavam o destino de nações, com heróis e vilões emergindo do caos.",
            " Culturas colidiam, criando alianças inesperadas e conflitos épicos."
          ],
          biografia: [
            " Conquistas precoces demonstravam o potencial que levaria a grandes feitos.",
            " Desafios pessoais e profissionais testavam a resiliência, moldando o caráter.",
            " Influências de mentores e rivais ajudavam a forjar um legado duradouro."
          ]
        };
      }

      // Gerar outline da história para coerência
      generateStoryOutline(prompt, genre, length) {
        const chapterCounts = {
          short: this.randomBetween(3, 5),
          medium: this.randomBetween(6, 8),
          long: this.randomBetween(9, 12),
          epic: this.randomBetween(13, 16)
        };
        const count = chapterCounts[length] || 8;
        const keywords = this.extractKeywords(prompt);
        const mainArc = this.themes[genre].estruturas[this.randomBetween(0, this.themes[genre].estruturas.length - 1)];
        const mainCharacters = this.generateCharacters(genre, this.randomBetween(3, 5));

        const chapters = [];
        for (let i = 1; i <= count; i++) {
          chapters.push({
            title: this.generateChapterTitle(genre, i, count),
            summary: this.generateChapterSummary(genre, i, count, mainArc, keywords),
            keyEvents: this.generateKeyEvents(genre, i, count, keywords)
          });
        }

        return { mainArc, mainCharacters, chapters, keywords };
      }

      // Gerar personagens consistentes
      generateCharacters(genre, count) {
        const types = this.themes[genre].personagens.slice(0, count);
        return types.map(type => ({
          type,
          name: this.themes[genre].namePool[this.randomBetween(0, this.themes[genre].namePool.length - 1)]
        }));
      }

      // Gerar resumo do capítulo
      generateChapterSummary(genre, chapterNum, totalChapters, mainArc, keywords) {
        const position = chapterNum / totalChapters;
        let summary = "";
        if (position < 0.2) summary = `Introdução ao mundo e personagens principais, estabelecendo o conflito inicial relacionado a ${keywords[0] || "um mistério"}.`;
        else if (position < 0.5) summary = `Desenvolvimento de alianças e desafios intermediários, aprofundando ${keywords[1] || "relações"}.`;
        else if (position < 0.8) summary = `Clímax com reviravoltas e confrontos, envolvendo ${keywords[2] || "segredos"}.`;
        else summary = `Resolução do arco principal de ${mainArc}, com legado e conclusões.`;
        return summary;
      }

      // Gerar eventos chave
      generateKeyEvents(genre, chapterNum, totalChapters, keywords) {
        const events = [];
        for (let i = 0; i < this.randomBetween(3, 5); i++) {
          events.push(`${this.themes[genre].elementos[this.randomBetween(0, this.themes[genre].elementos.length - 1)]} envolvendo ${keywords[i % keywords.length] || "um elemento surpresa"}`);
        }
        return events;
      }

      // Gerar conteúdo detalhado com outline
      generateDetailedContent(prompt, genre, complexity, length) {
        const outline = this.generateStoryOutline(prompt, genre, length);
        const wordsPerChapter = {
          medium: this.randomBetween(800, 1200),
          high: this.randomBetween(1500, 2500),
          'very-high': this.randomBetween(3000, 5000)
        };
        const wordTarget = wordsPerChapter[complexity] || 2000;

        const chapters = outline.chapters.map((chap, index) => 
          this.generateDetailedChapter(outline, genre, index + 1, outline.chapters.length, wordTarget)
        );

        return { chapters, title: this.generateTitle(prompt, genre, outline.keywords), outline };
      }

      // Gerar título da história
      generateTitle(prompt, genre, keywords) {
        return `O ${this.capitalize(keywords[0] || "Mistério")} de ${this.capitalize(keywords[1] || genre)}`;
      }

      // Gerar capítulo detalhado usando outline
      generateDetailedChapter(outline, genre, chapterNum, totalChapters, wordTarget) {
        const chap = outline.chapters[chapterNum - 1];
        const title = chap.title;
        const content = this.buildDetailedContent(outline, genre, chapterNum, totalChapters, wordTarget);
        return { title, content };
      }

      // Construir conteúdo
      buildDetailedContent(outline, genre, chapterNum, totalChapters, wordTarget) {
        let content = "";
        const sections = this.getChapterStructure(genre, chapterNum, totalChapters);
        sections.forEach(section => {
          content += this.generateSectionContent(section, outline, genre, chapterNum, wordTarget / sections.length);
        });
        return content;
      }

      // Estrutura de capítulo por gênero (expandida)
      getChapterStructure(genre, chapterNum, totalChapters) {
        const structures = {
          fantasia: ["Cena de Abertura", "Desenvolvimento de Personagem", "Expansão do Mundo", "Conflito ou Descoberta", "Preparação para Próximo Capítulo"],
          scifi: ["Contexto Tecnológico", "Desenvolvimento Científico", "Dilema Ético", "Ação ou Descoberta", "Consequências"],
          romance: ["Encontro ou Reencontro", "Desenvolvimento Emocional", "Conflito Relacional", "Momento de Intimidade", "Preparação para Desenvolvimento"],
          misterio: ["Apresentação do Mistério", "Coleta de Pistas", "Desenvolvimento de Suspeitas", "Reviravolta", "Preparação para Revelação"],
          aventura: ["Preparação da Jornada", "Enfrentando Desafios", "Descobertas", "Clímax da Aventura", "Reflexão"],
          drama: ["Crise Inicial", "Conflitos Internos", "Relacionamentos Tensionados", "Momento de Virada", "Resolução Parcial"],
          historico: ["Contexto Histórico", "Eventos Chave", "Intrigas Políticas", "Batalha ou Conflito", "Consequências Históricas"],
          biografia: ["Fase da Vida", "Conquistas", "Desafios Pessoais", "Influências Externas", "Reflexão sobre Legado"]
        };
        return structures[genre] || structures.fantasia;
      }

      // Gerar seção com integração de outline
      generateSectionContent(sectionType, outline, genre, chapterNum, wordTarget) {
        let content = "";
        const { mainCharacters, keywords } = outline;
        const hero = mainCharacters[0]?.name || "Herói";
        const ally = mainCharacters[1]?.name || "Aliado";
        const villain = mainCharacters[mainCharacters.length - 1]?.name || "Vilão";

        switch(sectionType) {
          case "Cena de Abertura":
          case "Contexto Tecnológico":
          case "Encontro ou Reencontro":
          case "Apresentação do Mistério":
          case "Preparação da Jornada":
          case "Crise Inicial":
          case "Contexto Histórico":
          case "Fase da Vida":
            content = this.generateOpeningScene(outline, genre, chapterNum, wordTarget, hero, keywords);
            break;
          case "Desenvolvimento de Personagem":
          case "Desenvolvimento Científico":
          case "Desenvolvimento Emocional":
          case "Coleta de Pistas":
          case "Enfrentando Desafios":
          case "Conflitos Internos":
          case "Eventos Chave":
          case "Conquistas":
            content = this.generateCharacterDevelopment(outline, genre, chapterNum, wordTarget, hero, ally, keywords);
            break;
          case "Expansão do Mundo":
          case "Dilema Ético":
          case "Conflito Relacional":
          case "Desenvolvimento de Suspeitas":
          case "Descobertas":
          case "Relacionamentos Tensionados":
          case "Intrigas Políticas":
          case "Desafios Pessoais":
            content = this.generateWorldBuilding(outline, genre, chapterNum, wordTarget, keywords);
            break;
          case "Conflito ou Descoberta":
          case "Ação ou Descoberta":
          case "Momento de Intimidade":
          case "Reviravolta":
          case "Clímax da Aventura":
          case "Momento de Virada":
          case "Batalha ou Conflito":
          case "Influências Externas":
            content = this.generateConflictOrDiscovery(outline, genre, chapterNum, wordTarget, hero, villain, keywords);
            break;
          default:
            content = this.generateGenericSection(outline, genre, chapterNum, wordTarget, keywords);
        }

        return `<h3>${sectionType}</h3>${content}`;
      }

      // Geradores de seções específicas (expandidos e com personagens consistentes)
      generateOpeningScene(outline, genre, chapterNum, wordTarget, hero, keywords) {
        const scenes = {
          fantasia: `O sol nascia sobre as montanhas de ${keywords[0] || "Eldoria"}, tingindo de dourado as torres ancestrais. ${hero} observava o horizonte, sentindo o peso da profecia que pairava sobre o reino.`,
          scifi: `A bordo da nave ${keywords[0] || "Andrômeda"}, ${hero} analisava uma anomalia no setor ${keywords[1] || "X-47"}, questionando as leis da física.`,
          romance: `Sob a chuva em uma rua antiga, ${hero} encontrou ${keywords[0] || "um estranho"}, um momento que mudaria tudo.`,
          misterio: `${hero}, o detetive, chegava à cena do crime em ${keywords[0] || "uma mansão isolada"}, onde pistas iniciais sugeriam um enigma profundo.`,
          aventura: `${hero} preparava sua mochila para a jornada através de ${keywords[0] || "terras desconhecidas"}, motivado por rumores de tesouros.`,
          drama: `${hero} enfrentava uma crise em ${keywords[0] || "sua vida cotidiana"}, refletindo sobre perdas recentes.`,
          historico: `No auge da ${keywords[0] || "Revolução"}, ${hero} participava de eventos que moldariam a história.`,
          biografia: `Na infância de ${hero} em ${keywords[0] || "uma pequena cidade"}, os primeiros sinais de genialidade apareciam.`
        };

        let baseContent = scenes[genre] || scenes.fantasia;
        while (this.countWords(baseContent) < wordTarget * 0.8) {
          baseContent += this.getRandomExpansion(genre);
        }
        return `<p>${baseContent}</p>`;
      }

      generateCharacterDevelopment(outline, genre, chapterNum, wordTarget, hero, ally, keywords) {
        const developments = {
          fantasia: `${hero} recordava lições de ${ally}, o mago, sobre o equilíbrio da ${keywords[0] || "magia"}, preparando-se para desafios futuros.`,
          scifi: `${hero} debatia ética com ${ally}, analisando implicações da ${keywords[0] || "tecnologia"} descoberta.`,
          romance: `${hero} confidenciava sentimentos a ${ally}, navegando o complexo ${keywords[0] || "relacionamento"}.`,
          misterio: `${hero} interrogava ${ally}, revelando motivações ocultas relacionadas a ${keywords[0] || "pistas"}.`,
          aventura: `${hero} treinava com ${ally} para superar ${keywords[0] || "desafios"} da jornada.`,
          drama: `${hero} confrontava ${ally} sobre ${keywords[0] || "conflitos familiares"}, buscando resolução.`,
          historico: `${hero} consultava ${ally} durante ${keywords[0] || "intrigas políticas"} da corte.`,
          biografia: `${hero} superava obstáculos com ajuda de ${ally}, moldando suas ${keywords[0] || "conquistas"}.`
        };

        let baseContent = developments[genre] || developments.fantasia;
        while (this.countWords(baseContent) < wordTarget * 0.8) {
          baseContent += this.getRandomExpansion(genre);
        }
        return `<p>${baseContent}</p>`;
      }

      generateWorldBuilding(outline, genre, chapterNum, wordTarget, keywords) {
        const buildings = {
          fantasia: `O reino de ${keywords[0] || "Eldoria"} era rico em ${keywords[1] || "magia"}, com florestas encantadas e cidades fortificadas.`,
          scifi: `O universo expandia-se com ${keywords[0] || "tecnologias avançadas"}, colônias espaciais e dilemas éticos.`,
          romance: `A cidade pulsava com ${keywords[0] || "encontros românticos"}, tradições culturais e barreiras sociais.`,
          misterio: `A mansão escondia ${keywords[0] || "segredos"}, com corredores labirínticos e artefatos suspeitos.`,
          aventura: `Terras selvagens ofereciam ${keywords[0] || "desafios"}, ruínas antigas e tesouros perdidos.`,
          drama: `A sociedade debatia ${keywords[0] || "dilemas morais"}, com famílias divididas e mudanças sociais.`,
          historico: `A era de ${keywords[0] || "guerras"} moldava culturas, com alianças frágeis e heróis emergentes.`,
          biografia: `O ambiente de ${keywords[0] || "influências"} formava o caráter, com eventos históricos impactantes.`
        };

        let baseContent = buildings[genre] || buildings.fantasia;
        while (this.countWords(baseContent) < wordTarget * 0.8) {
          baseContent += this.getRandomExpansion(genre);
        }
        return `<p>${baseContent}</p>`;
      }

      generateConflictOrDiscovery(outline, genre, chapterNum, wordTarget, hero, villain, keywords) {
        const conflicts = {
          fantasia: `${hero} confrontava ${villain} em uma batalha de ${keywords[0] || "magia"}, revelando traições antigas.`,
          scifi: `${hero} descobria uma conspiração de ${villain}, envolvendo ${keywords[0] || "IA rebelde"}.`,
          romance: `${hero} lidava com ciúmes de ${villain}, testando o ${keywords[0] || "amor"} verdadeiro.`,
          misterio: `${hero} desvendava uma pista crucial contra ${villain}, mudando a investigação.`,
          aventura: `${hero} enfrentava ${villain} em uma armadilha durante a ${keywords[0] || "busca"}.`,
          drama: `${hero} resolvia conflito com ${villain}, buscando ${keywords[0] || "redenção"}.`,
          historico: `${hero} liderava contra ${villain} na ${keywords[0] || "batalha decisiva"}.`,
          biografia: `${hero} superava rivalidade com ${villain}, alcançando ${keywords[0] || "sucesso"}.`
        };

        let baseContent = conflicts[genre] || conflicts.fantasia;
        while (this.countWords(baseContent) < wordTarget * 0.8) {
          baseContent += this.getRandomExpansion(genre);
        }
        return `<p>${baseContent}</p>`;
      }

      generateGenericSection(outline, genre, chapterNum, wordTarget, keywords) {
        let baseContent = `Em meio a ${keywords[0] || "eventos"}, os personagens navegavam por ${keywords[1] || "desafios"} inesperados.`;
        while (this.countWords(baseContent) < wordTarget * 0.8) {
          baseContent += this.getRandomExpansion(genre);
        }
        return `<p>${baseContent}</p>`;
      }

      // Métodos auxiliares
      getRandomExpansion(genre) {
        const exps = this.expansions[genre] || this.expansions.fantasia;
        return exps[this.randomBetween(0, exps.length - 1)];
      }

      generateChapterTitle(genre, chapterNum, totalChapters) {
        const titles = {
          1: ["O Início", "Primeiros Sinais", "O Despertar"],
          2: ["Aliados", "Passos Iniciais", "Presságios"],
          [totalChapters - 1]: ["Abismo", "Não Retorno", "Confronto"],
          [totalChapters]: ["Fim", "Recomeço", "Legado"]
        };
        if (titles[chapterNum]) return titles[chapterNum][this.randomBetween(0, titles[chapterNum].length - 1)];
        const mid = ["Desafios", "Descobertas", "Traições", "Progresso"];
        return mid[this.randomBetween(0, mid.length - 1)];
      }

      extractKeywords(prompt) {
        const commonWords = ['um', 'uma', 'os', 'as', 'de', 'do', 'da', 'em', 'no', 'na', 'por', 'para', 'com', 'sem', 'sobre', 'entre'];
        const words = prompt.toLowerCase().replace(/[^\w\s]/g, '').split(/\s+/).filter(word => word.length > 3 && !commonWords.includes(word));
        return [...new Set(words)].slice(0, 10); // Mais keywords para variedade
      }

      countWords(text) {
        return text.split(/\s+/).length;
      }

      randomBetween(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }

      capitalize(word) {
        return word.charAt(0).toUpperCase() + word.slice(1);
      }
    }

    // Inicialização e controle da UI (mantido similar, com ajustes para nova lógica)
    const storyGenerator = new AdvancedStoryGenerator();
    const generateBtn = document.getElementById('generateBtn');
    const regenerateBtn = document.getElementById('regenerateBtn');
    const downloadBtn = document.getElementById('downloadBtn');
    const promptInput = document.getElementById('prompt');
    const titleInput = document.getElementById('title');
    const authorInput = document.getElementById('author');
    const languageSelect = document.getElementById('language');
    const genreSelect = document.getElementById('genre');
    const lengthSelect = document.getElementById('length');
    const complexitySelect = document.getElementById('complexity');
    const ebookPreview = document.getElementById('ebookPreview');
    const notification = document.getElementById('notification');
    const progressBar = document.getElementById('progressBar');
    const stats = document.getElementById('stats');
    const wordCount = document.getElementById('wordCount');
    const chapterCount = document.getElementById('chapterCount');
    const pageCount = document.getElementById('pageCount');

    function showNotification(message, isError = false) {
      notification.textContent = message;
      notification.className = `notification ${isError ? 'error' : ''} show`;
      setTimeout(() => notification.classList.remove('show'), 4000);
    }

    function updateProgress(percent) {
      progressBar.style.width = `${percent}%`;
    }

    function countWordsInText(text) {
      return text.split(/\s+/).length;
    }

    generateBtn.addEventListener('click', async () => {
      const prompt = promptInput.value.trim();
      if (!prompt) {
        showNotification("Por favor, descreva detalhadamente o tema do e-book.", true);
        return;
      }

      ebookPreview.innerHTML = `
        <div class="empty-state">
          <i class="fas fa-spinner loading"><i class="fas fa-sync-alt"></i></i>
          <p class="loading">Gerando e-book detalhado com IA avançada...</p>
          <p style="margin-top: 20px; font-size: 0.9rem;">Isso pode levar alguns segundos devido ao alto nível de detalhe</p>
        </div>
      `;

      stats.style.display = 'none';
      updateProgress(10);

      // Simulação de processamento
      const totalSteps = 5;
      let currentStep = 0;
      const processInterval = setInterval(() => {
        currentStep++;
        updateProgress(10 + (currentStep / totalSteps) * 80);
        if (currentStep >= totalSteps) {
          clearInterval(processInterval);
          generateCompleteContent(prompt);
        }
      }, 800);
    });

    function generateCompleteContent(prompt) {
      const genre = genreSelect.value;
      const complexity = complexitySelect.value;
      const length = lengthSelect.value;
      const language = languageSelect.value; // Poderia ser usado para templates multilíngues no futuro
      const author = authorInput.value.trim() || "Book Club AI";
      const userTitle = titleInput.value.trim();

      const result = storyGenerator.generateDetailedContent(prompt, genre, complexity, length);
      const title = userTitle || result.title;
      if (!userTitle) titleInput.value = title;

      let ebookHTML = `
        <div class="ebook-title">${title}</div>
        <div class="ebook-author">Por ${author}</div>
        <div class="ebook-content">
          <div style="text-align: center; margin-bottom: 30px; font-style: italic;">
            <p>Baseado na descrição: "${prompt}"</p>
          </div>
      `;

      let totalWords = 0;
      result.chapters.forEach((chapter, index) => {
        const chapterWords = countWordsInText(chapter.content);
        totalWords += chapterWords;
        ebookHTML += `
          <div class="chapter">
            <div class="chapter-title">Capítulo ${index + 1}: ${chapter.title}</div>
            <div class="chapter-content">${chapter.content}</div>
          </div>
        `;
      });

      ebookHTML += `
          <div style="border-top: 2px solid var(--light-gray); padding-top: 20px; margin-top: 40px;">
            <p><strong>Nota do Sistema:</strong> Este conteúdo foi gerado por uma IA simulada avançada, com lógica procedural para coerência narrativa, personagens consistentes e expansão dinâmica. Em produção, integre com APIs de LLMs para ainda mais inteligência.</p>
          </div>
        </div>
      `;

      ebookPreview.innerHTML = ebookHTML;
      updateProgress(100);

      const estimatedPages = Math.ceil(totalWords / 350);
      wordCount.textContent = totalWords.toLocaleString();
      chapterCount.textContent = result.chapters.length;
      pageCount.textContent = estimatedPages;
      stats.style.display = 'flex';

      downloadBtn.disabled = false;
      showNotification(`E-book gerado com sucesso! ${totalWords.toLocaleString()} palavras em ${result.chapters.length} capítulos.`);
    }

    regenerateBtn.addEventListener('click', () => {
      if (!promptInput.value.trim()) {
        showNotification("Por favor, insira um prompt primeiro.", true);
        return;
      }
      generateBtn.click();
    });

    downloadBtn.addEventListener('click', () => {
      const title = titleInput.value || "ebook-detalhado";
      const content = ebookPreview.innerText;
      const blob = new Blob([content], { type: 'text/plain' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = `${title.replace(/\s+/g, '-').toLowerCase()}.txt`;
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      URL.revokeObjectURL(url);
      showNotification("E-book baixado com sucesso!");
    });
  </script>
</body>
</html>