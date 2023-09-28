<?php
    require( './inc/db.php' );
    if( $_POST ) {
        echo '<script type="text/Javascript">location.href = "#sewo"</script>';
    }
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000">

        <title>Good Care Award - immoTISS </title>
        <meta name="description" content="">

        <link rel="icon" type="image/png" href="/favicon.png" sizes="96x96">
        <link rel="shortcut icon" href="/favicon.png">

        <link rel="stylesheet" href="./dist/css/immotiss.css">
        <link rel="stylesheet" href="./dist/css/aos.css">
    </head>
    <body>
        <div class="download-button">
            <a href="#sewo" title="Zum Download">SEWO 23<br>Download</a>
        </div>
        <header>
            <div class="inner">
                <div class="branding">
                    <img src="./dist/img/immotiss-logo.svg">
                </div>
                <nav>
                    <a href="#sewo23">
                        SEWO 23
                    </a>
                    <a href="#werte">
                        Werte
                    </a>
                    <a href="#portfolio">
                        Portfolio
                    </a>
                    <a href="#team">
                        Team
                    </a>
                    <a href="#goodcareaward">
                        Good Care Award
                    </a>
                    <a href="#kontakt">
                        Kontakt
                    </a>
                </nav>
                <div class="icon-menu">
                    <a href="mailto:info@immotisscare.de">
                        <img src="./dist/img/mail-white.svg" width="25" height="25">
                    </a>
                </div>
                <div class="burger">
                    <svg class="open visible" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.144043" y1="1.75549" x2="17.8628" y2="1.75549" stroke="white" stroke-width="2"/>
                        <line x1="0.144043" y1="10.2377" x2="17.8628" y2="10.2377" stroke="white" stroke-width="2"/>
                    </svg>
                    <svg class="cross" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 14.6375L14.6375 16L8 9.36632L1.36632 16L0 14.6375L6.63749 8L0 1.36632L1.36632 0L8 6.63749L14.6375 0L16 1.36632L9.36632 8L16 14.6375Z" fill="white"/>
                    </svg>
                </div>
            </div>
        </header>

        <div id="mobile-menu">
            <div class="inner">
                <nav>
                    <a href="#sewo23">
                        SEWO 23
                    </a>
                    <a href="#werte">
                        Werte
                    </a>
                    <a href="#portfolio">
                        Portfolio
                    </a>
                    <a href="#team">
                        Team
                    </a>
                    <a href="#goodcareaward">
                        Good Care Award
                    </a>
                    <a href="#kontakt">
                        Kontakt
                    </a>
                </nav>
                <a href="https://immotisscare.de/" target="_blank">
                    <img src="./dist/img/immotiss-logo.svg">
                </a>
            </div>
        </div>

        <main>
            <section class="hero">
                <div class="inner">
                    <div class="logo">
                        <a href="https://immotisscare.de/" target="_blank">
                            <img src="./dist/img/immotiss-logo.svg">
                        </a>
                    </div>
                    <div class="content">
                        <span>bewahrt.</span>
                        <span>vereint.</span>
                        <span>vertraut.</span>
                    </div>
                    <a href="#sewo23" class="button">Enter</a>
                </div>
            </section>
            <section id="sewo23" class="module-9">
            <div class="inner">
                    <div class="header">
                        <p class="prefix">REPORT: Seniorenwohnen in Deutschland</p>
                        <h2>Wie Senioren in Deutschland heute leben. Und was sie morgen brauchen.</h2>
                        <p>Der Alltag der Senioren in Deutschland verändert sich – sie wollen anders leben als bisher. Was treibt sie an? Welche Wohnformen entstehen derzeit und welche sind heute und in Zukunft besonders gefragt? Was sind die Erfolgsfaktoren für Investitionen in den Sektor – trotz der Krise der Immobilienbranche?</p>
                        <p>Der IMMOTISS-Report „Seniorenwohnen in Deutschland“ gibt einen allumfassenden, datenbasierten Rundumblick auf die Landschaft der Seniorenimmobilien. In diesem äußerst dynamischen Sektor schafft der Report erstmals Klarheit und gibt Orientierung – für Investoren, Betreiber und Bewohner gleichermaßen.</p>
                        <p><strong>Laden Sie jetzt den Report herunter und erhalten Sie wertvolle Informationen, die Ihnen bei Ihren Entscheidungen helfen werden.</strong></p>
                    </div>
                    <picture>
                        <source media="(max-width: 550px)" srcset="./dist/img/sewo23_1.png">
                        <img src="./dist/img/sewo23_1.png" title="Wohnform im Alter">
                    </picture>
                </div>
            </section>
            <section class="module-10">
                <picture>
                    <img src="./dist/img/sewo_background.jpg" title="Wohnform im Alter" loading="lazy">
                </picture>
                <div class="inner">
                    <div class="image-container">
                        <picture data-aos="fade-up">
                            <img src="./dist/img/staedte.png" title="Wohnform im Alter" loading="lazy">
                        </picture>
                    </div>
                    <div class="content" data-aos="fade-up">
                        <div class="content-wrapper">
                            <h2>Zentrale<br>Erkenntnisse<br>des Reports</h2>
                            <p><strong>> 550.000 Einheiten für Seniorenwohnen</strong> gibt es derzeit bundesweit – weit mehr als bisher angenommen.</p>
                            <p><strong>> 4 Kategorien im Seniorenwohnen</strong> lassen sich erkennen – zum besseren Verständnis eines hochkomplexen und teils stark fragmentierten Marktes.</p>
                            <p><strong>> Spezifischer Überblick</strong> des Seniorenwohnens in allen Bundesländern</p>
                            <p><b>Wir helfen dabei, die Herausforderungen im Seniorenwohnsektor zu erkennen, zu verstehen und zu lösen.</b></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module-11">
                <div class="inner">
                    <div class="column column-1">
                        <div class="inner">
                            <picture data-aos="fade-up">
                                <img src="./dist/img/magazin.png" title="Brückenbauer für die Pflegebranche" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="inner">
                            <p class="prefix">gelesen.</p>
                            <h2 data-aos="fade-up">Digital oder<br>zum Blättern?</h2>
                            <div class="content" data-aos="fade-up">
                                <p>Laden Sie jetzt die digitale Version herunter, indem Sie Ihre Kontaktdaten hinterlassen. Möchten Sie den Seniorenwohn-Report auch in Händen halten? Wir haben eine kleine Auflage gedruckt und senden Ihnen gerne Ihr persönliches Exemplar zu. Solange der Vorrat reicht – auf Recyclingpapier gedruckt.</p>
                                <div class="link-container">
                                    <a href="#sewo" title="Zum Bestellfomular">Zum Bestellformular</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="werte" class="module-6">
                <div class="inner">
                    <div class="image-container">
                        <picture data-aos="fade-up">
                            <img src="./dist/img/wohnform-im-alter.jpg" title="Wohnform im Alter" loading="lazy">
                        </picture>
                    </div>
                    <div class="content" data-aos="fade-up">
                        <div class="content-wrapper">
                            <p class="prefix">bewahrt.</p>
                            <h2>Für ein gutes<br>Leben im Alter</h2>
                            <p>Die Welt wird alt. Deutschland ist dabei Vorreiter: Bald werden Senioren die Mehrheit stellen und immer mehr Unterstützung benötigen. Parallel steht die Pflegebranche vor enormen Problemen: Energiepreise und gestiegene Baukosten lasten auf den Betreibern – und es fehlt an Fachkräften, neuen Einrichtungen und Investoren.</p>
                            <p><b>Wir helfen dabei, diese Herausforderungen zu meistern.</b></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module-1">
                <div class="inner">
                    <div class="column column-1">
                        <div class="inner">
                            <picture data-aos="fade-up">
                                <img src="./dist/img/brueckenbauer.jpg" title="Brückenbauer für die Pflegebranche" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="inner">
                            <p class="prefix">vereint.</p>
                            <h2 data-aos="fade-up">Brückenbauer für<br>die Pflegebranche</h2>
                            <div class="content" data-aos="fade-up">
                                <p>Seniorenwohnen ist einer der Zukunftsmärkte – mit Chancen, aber auch Herausforderungen. Mit unserer 360°-Beratung entwickeln wir Strategien für erfolgreiche Pflege- und Gesundheitsimmobilien und bauen Brücken zwischen Betreibern, Investoren und Politik.</p>
                                <p><b>Unsere Mission: Wir wollen den Menschen in Deutschland ein gutes Leben im Alter ermöglichen.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module-4">
                <div class="inner">
                    <div class="header">
                        <p class="prefix">vertraut.</p>
                        <h2>Wir schaffen Markttransparenz</h2>
                        <p>Gute Versorgung im Alter baut auf Vertrauen. Eines unserer Ziele ist es deswegen, Transparenz im Pflegesektor zu schaffen. Mit Daten, Wissen und Erfahrung tragen wir dazu bei, Sichtbarkeit für Betreiber, Investoren, Bewohner und ihre Familien zu schaffen.</p>
                    </div>
                    <picture>
                        <source media="(max-width: 550px)" srcset="./dist/img/care-market-navigation-mobile.jpg">
                        <img src="./dist/img/care-market-navigation.jpg" title="Wohnform im Alter">
                    </picture>
                    <div class="content" data-aos="fade-up">
                        <h3>QPR-Ranking</h3>
                        <p>IMMOTISS hat ein datenbankgestütztes Rankingsystem als Lineal entwickelt, um die individuellen QPR-Ergebnisse der Pflegeheime im Marktgeschehen einordnen zu können. Das QPR-Ranking von IMMOTISS fungiert als Navigator und schafft durch transparente und unabhängige Vergleichbarkeit die Grundlage zur Messung von Pflegequalität.</p>
                        <h3>Good Care Award</h3>
                        <p>Auf Basis des QPR-Rankings ermittelt IMMOTISS einmal jährlich die Top 30 der deutschen Betreiber:innen. Mit der jährlichen Auszeichnung zum Quality Leader und den regionalen Top-Rankings schaffen wir gemeinsam mehr Aufmerksamkeit, Bewusstsein und Vertrauen in einen der relevantesten Märkte für Mensch und Gesellschaft. <a href="https://award.immotiss.de" target="_blank" title="Good Care Award">Mehr…</a></p>
                        <h3>Marktreports</h3>
                        <p>Wir kennen die Pflegebranche in- und auswendig – und teilen unser Wissen mit dem Markt. Ein Beispiel ist unser Marktreport Seniorenwohnen. Denn der Markt ist in den vergangenen Jahren extrem gewachsen und es fehlt an Sichtbarkeit. Wir haben die einzige umfassend komplette Marktübersicht erstellt. Coming soon.</p>
                    </div>
                </div>
            </section>
            <section id="portfolio" class="module-5">
                <div class="inner">
                    <h2 data-aos="fade-up"><span>Unser 360°-Portfolio</span><br>Wie wir die Pflegebranche unterstützen</h2>
                    <div class="tile-container">
                        <div class="tile tile-1" data-aos="fade-up">
                            <div class="icon">
                                <picture>
                                    <img src="./dist/img/vergleichbarkeit-icon.svg" title="Vergleichbarkeit">
                                </picture>
                            </div>
                            <h3>CONSULTING</h3>
                            <div class="divider"></div>
                            <p>Wir vereinen Investoren, Kapitalgeber und Betreiber aus den Bereichen Pflege, Seniorenwohnen und Gesundheit und entwickeln nachhaltige Konzepte.</p>
                            <a href="http://www.immotisscare.de/" title="">Immotiss<span>CARE</span></a>
                        </div>
                        <div class="tile tile-2" data-aos="fade-up" data-aos-delay="150">
                            <div class="icon">
                                <picture>
                                    <img src="./dist/img/transparenz-icon.svg" title="Vergleichbarkeit">
                                </picture>
                            </div>
                            <h3>MANAGEMENT</h3>
                            <div class="divider"></div>
                            <p>Wir bieten Interims- und Ramp-Up-Management sowie betriebliche Beratung für Pflegeeinrichtungen und Seniorenwohnen.</p>
                            <a href="http://www.immotiss-omc.de/" title="">Immotiss<span>OMC</span></a>
                        </div>
                        <div class="tile tile-3" data-aos="fade-up" data-aos-delay="250">
                            <div class="icon">
                                <picture>
                                    <img src="./dist/img/vertrauen-icon.svg" title="Vergleichbarkeit">
                                </picture>
                            </div>
                            <h3>DATA</h3>
                            <div class="divider"></div>
                            <p>Wir sammeln, validieren, interpretieren und visualisieren Daten des Pflegesektors – damit Sie bessere Entscheidungen treffen können.</p>
                            <a href="http://www.trasenix.de/" title=""><span>TRASENIX</span></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module-2">
                <div class="inner">
                    <div class="content">
                        <div class="column column-1">
                            <div class="imagewrapper"><img src="./dist/img/logo_small.jfif" alt=""></div>
                            <p>LinkedIn</p>
                            <h2>Connect<br>with us</h2>
                        </div>
                        <div class="column column-2">
                            <div class="feed">
                                <div class="imagewrapper"><img src="./dist/img/Statement-AMM.jpg" alt=""></div>
                                <div class="imagewrapper"><img src="./dist/img/550K.jpg" alt=""></div>
                                <div class="imagewrapper"><img src="./dist/img/2023-06-02_Mangel.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="link">
                        <a href="#" titel="Mehr lesen">read more</a>
                    </div>
                </div>
            </section>
            <section id="team" class="module-3">
                <div class="inner">
                    <h2><span>Unsere Expertinnen und Experten</span><br>für eine holistische Marktberatung</h2>
                    <div class="wrapper">
                        <div class="item item-1">
                            <div class="imagewrapper"><img src="./dist/img/jochen_zeh.jpg" alt=""></div>
                            <div class="prename">Jochen</div>
                            <div class="lastname">Zeeh</div>
                            <div class="title">Geschäftsführender<br>Gesellschafter</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-2">
                            <div class="imagewrapper"><img src="./dist/img/timm_kloepper.jpg" alt=""></div>
                            <div class="prename">Timm</div>
                            <div class="lastname">Klöpper</div>
                            <div class="title">Geschäftsführer<br>IMMOTISS care</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-3">
                            <div class="imagewrapper"><img src="./dist/img/guido_heidbuechel.jpg" alt=""></div>
                            <div class="prename">Guido</div>
                            <div class="lastname">Heidbüchel</div>
                            <div class="title">Geschäftsführer<br>IMMOTISS omc</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-4">
                            <div class="imagewrapper"><img src="./dist/img/anna_martin.jpg" alt=""></div>
                            <div class="prename">Anna Maria</div>
                            <div class="lastname">Martin</div>
                            <div class="title">Senior<br>Consultant</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-5">
                            <div class="imagewrapper"><img src="./dist/img/maximilian_jahger.jpg" alt=""></div>
                            <div class="prename">Maximilian</div>
                            <div class="lastname">Jahger</div>
                            <div class="title">Senior<br>Consultant</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-6">
                            <div class="imagewrapper"><img src="./dist/img/coming-soon.png" alt=""></div>
                            <div class="prename">Hasan</div>
                            <div class="lastname">Cömert</div>
                            <div class="title">Junior<br>Consultant</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-7">
                            <div class="imagewrapper"><img src="./dist/img/moritz_schroeter.jpg" alt=""></div>
                            <div class="prename">Moritz</div>
                            <div class="lastname">Schröter</div>
                            <div class="title">Projektmanagement<br>Vertrieb</div>
                            <div class="line"><span></span></div>
                        </div>
                        <div class="item item-8">
                            <div class="imagewrapper"><img src="./dist/img/kevin_hoffmann.jpg" alt=""></div>
                            <div class="prename">Kevin</div>
                            <div class="lastname">Hoffmann</div>
                            <div class="title">Head of<br>Marketing</div>
                            <div class="line"><span></span></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="goodcareaward" class="module-7">
                <div class="inner">
                    <div class="content">
                        <picture class="icon">
                            <img src="./dist/img/a.svg" title="ImmoTISS" alt="ImmoTISS">
                        </picture>
                        <h2>Good Care Award</h2>
                        <p class="subtitle">Quality Leader <b>2023</b></p>
                        <a href="https://immotisscare.de/" target="_blank" class="link">Weiterlesen</a>
                    </div>
                </div>
            </section>
            <section id="sewo" class="module-8 form">
                <div class="inner">
                    <div class="column column-1">
                        <picture>
                            <img src="./dist/img/form.jpg" title="Wohnform im Alter" loading="lazy">
                        </picture>
                    </div>
                    <div class="column column-2">
                        <?php if( !$_POST ) : ?>
                        <form method="POST" autocomplete="on">
                            <h2>SEWO 23<br><span>Bestellformular</span></h2>
                            <p>Die digitale Version erhalten Sie ganz einfach als PDF zum herunterladen:</p>
                            <input type="hidden" id="url" name="url">
                            <label for="prename">
                                <input type="text" id="prename" name="prename" placeholder="Vorname*" pattern="^[A-Za-zäöüÄÖÜß\s\-]+$" required>
                            </label>
                            <label for="lastname">
                                <input type="text" id="lastname" name="lastname" placeholder="Nachname*" pattern="^[A-Za-zäöüÄÖÜß\s\-]+$" required>
                            </label>
                            <label for="e_mail">
                                <input type="email" id="email" name="email" placeholder="Berufliche E-Mail-Adresse*" pattern="^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$" required>
                            </label>
                            <p>Wenn Sie zusätzlich eine gedruckte Version erhalten möchten, schicken wir Ihnen diese kostenlos ins Büro. Bitte geben Sie dazu Ihre Geschäftsadresse an.</p>
                            <label for="company">
                                <input type="text" id="company" name="company" placeholder="Firma / Institution" pattern="^[A-Za-zäöüÄÖÜß\s\d\(\)\-]+$">
                            </label>
                            <label for="street">
                                <input type="text" id="street" name="street" placeholder="Straße" pattern="^[A-Za-zäöüÄÖÜß\s\d\-]+$">
                            </label>
                            <div class="location-wrapper">
                                <label for="postal_code">
                                    <input type="text" id="postal_code" name="postal_code" placeholder="PLZ" pattern="^\d{5}$">
                                </label>
                                <label for="location">
                                    <input type="text" id="location" name="location" placeholder="Ort" pattern="^[A-Za-zäöüÄÖÜß\s\/()\-]+$">
                                </label>
                            </div>
                            <label for="remarks">
                                <input type="text" id="remarks" name="remarks" placeholder="Anmerkungen, Anzahl Exemplare" pattern="^[A-Za-zäöüÄÖÜß\s\d\-]+$">
                            </label>
                            <div class="form-footer">
                                <div class="privacy-policy">
                                    <p>Wir verwenden Ihre Daten ausschließlich gemäß unserer Datenschutzhinweise/-erklärung</p>
                                </div>
                                <div class="button">
                                    <input type="submit" value="absenden">
                                </div>
                            </div>
                        </form>
                        <?php 
                            else : 
                            $result = formsubmit( $_POST );
                            if( $result === 'download' ) :
                        ?>
                            <div class="download">
                                <p>
                                    <strong>Geschafft.</strong> Nun wünschen wir Ihnen viel Spaß mit unserem SEWO-Report.
                                </p>

                                <a href="./data/SEWO-Report-by-IMMOTISS.pdf" title="Download">Zum SEWO Report 23</a>
                            </div>
                            <?php else: ?>
                            <div class="mail">
                                <p>
                                    <strong>Geschafft.</strong> Die digitale Version des SEWO-Reports können Sie jetzt gleich genießen. Die Printausgabe stecken wir in den kommenden Tagen in die Post.
                                </p>

                                <a href="./data/SEWO-Report-by-IMMOTISS.pdf" title="Download">Zum SEWO Report 23</a>
                            </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="module-12">
                <div class="inner">
                    <h2>Erfahrung. Expertise. Lösungen. <span>Ihr Wegweiser im Pflege- & Gesundheitsmarkt</span></h2>
                    <p>Die Pflege- und Gesundheitsbranche ist ein komplexer und dynamischer Markt. Als Berater verstehen wir die Herausforderungen und Chancen, denen sich Investoren, Betreiber und Inhaber von Senioren- und Gesundheitseinrichtungen gegenübersehen. Unser umfangreiches Fachwissen ermöglicht es uns, gezielt Antworten zu finden und Probleme zu lösen.</p>
                    <p>Unsere Grundlage sind Zahlen, Daten und Fakten aus dem Markt, auf deren Basis wir Erkenntnisse gewinnen und für Transparenz sorgen. Wir unterstützen Sie bei der Überprüfung der Markttauglichkeit von Konzepten und Preisstrukturen, der Identifizierung von Hebeln zur Verbesserung und der Korrektur von Kursabweichungen. Standort-, Einrichtungs- und Wettbewerbsanalysen sind unverzichtbar, um nachhaltig und transparent am Markt zu agieren. Wir lösen die Herausforderungen, die mit Pflegesatzverhandlungen einhergehen, damit Sie sich auf Ihre Einrichtung konzentrieren können.</p>
                    <p>Doch was uns wirklich auszeichnet, ist unser Engagement. Sollten wir nicht sofort eine Lösung parat haben, setzen wir uns mit Leidenschaft dafür ein, eine zu finden. Wir nutzen unser großes Netzwerk, um gemeinsam die besten Optionen zu finden.</p>
                    <p><strong>Sprechen Sie uns an, denn wir sind hier, um Ihnen zu helfen.</strong></p>
                </div>
                <div class="arrow"></div>
            </section>
        </main>
        <footer id="contact">
            <div class="connect">
                <div class="inner">
                    <div class="container">
                        <a href="https://www.linkedin.com/company/immotiss-gruppe/" target="_blank" title="LinkedIn">
                            <picture>
                                <img src="./dist/img/linkedin-logo.svg" title="LinkedIn">
                            </picture>
                            <span>Let's connect.</span>
                        </a>
                    </div>
                    <div class="container">
                        <a href="mailto:mailto:info@immotisscare.de" title="Write us">
                            <picture>
                                <img src="./dist/img/e-mail-logo.svg">
                            </picture>
                            <span>Write us.</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="inner">
                    <p>&copy; 2023 Immotiss</p>
                    <nav>
                        <ul>
                            <li><a href="./impressum.html" target="_self" title="Impressum">Impressum</a></li>
                            <li><a href="./datenschutz.html" target="_self" title="Datenschutz">Datenschutz</a></li>
                        </ul>
                    </nav>
                    <p>bewahrt. <span>seit 2009</span></p>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="./dist/js/immotiss.min.js" defer></script>
        <script type="text/javascript" src="./dist/js/aos.js" defer></script>

        <script>
            window.addEventListener("load", function(){
                AOS.init({
                    once: true,
                    duration: 800,
                });
            });
        </script>
    </body>
</html>