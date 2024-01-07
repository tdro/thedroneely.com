<?php require __DIR__ . '/partials/header.resume.php'; ?>

    <body data-page="resume">

        <resume-page>

            <column-left>
              <section>
                <h1>
                  <a href="/resume/">Resume</a>
                </h1>

                <br>

                <p>
                  <a href="/contact/">Contact for Full Resume</a>
                </p>

                <br>

                <h1><a href="/">Web <br> Developer</a></h1>

                <br>

                <p><a href="/">https://www.thedroneely.com</a></p>

                <br>

                <p>
                  <a href="#stack">#Stack</a>
                  <a href="#questions">#Questions</a>
                  <a href="#projects">#Projects</a>
                </p>
              </section>
            </column-left>

            <column-right>

                <main>

                <article>

                    <section>
                      <h1>Thedro Neely</h1>
                      <p>Hi, My name is Thedro, and I'm a web developer based in The Bahamas.</p>
                    </section>

                    <br>

                    <column-section>

                        <column-stack>
                          <section>
                            <h1>Stack</h1>
                          </section>

                          <br>

                          <section>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Front End</h1>
                                <p>HTML &nbsp; CSS &nbsp; JavaScript &nbsp; Bulma</p>
                                <p>Bootstrap &nbsp; Sass &nbsp; Tailwind</p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Back End</h1>
                                <p>PHP &nbsp; Python &nbsp; MariaDB &nbsp; MySQL</p>
                                <p>PostgreSQL &nbsp; Nginx &nbsp; Apache </p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Tooling and Frameworks</h1>
                                <p>LaTeX &nbsp; Laravel &nbsp; Sublime Text</p>
                                <p>Npm &nbsp; Webpack &nbsp; Gimp &nbsp; Hugo</p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Version Systems &amp; GUIs</h1>
                                <p>Git &nbsp; Gitlab &nbsp; Github &nbsp; Gitea</p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Sys Admin</h1>
                                <p>CentOS &nbsp; Debian &nbsp; Windows</p>
                                <p>Android &nbsp; Alpine &nbsp; pfSense/Opnsense</p>
                                <p>Systemd &nbsp; DNS &nbsp; SMTP &nbsp; DHCP</p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Dev Ops</h1>
                                <p>Docker &nbsp; Jenkins &nbsp; Drone CI</p>
                                <p>LXC</p>
                              </timeline-content>
                            </timeline-item>

                          </section>
                        </column-stack>

                        <column-questions>
                          <section id="questions">
                              <h1>Questions</h1>
                          </section>

                          <br>

                          <section>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>Are you currently available for work?</h1>
                                <p>
                                  Yes, I'm currently available for contract work and full-time job
                                  opportunities.
                                </p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>How long have you been programming?</h1>
                                <p>I've been programming for a long time, too long to accurately say.</p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>What is your preferred stack?</h1>
                                <p>
                                  PHP 7 + PostgreSQL. Pretty decent stuff. I'm still learning Vue and React. I'd
                                  like to learn Go next.
                                </p>
                              </timeline-content>
                            </timeline-item>

                            <timeline-item>
                              <aside></aside>
                              <timeline-content>
                                <h1>What's your OS setup?</h1>
                                  <p>
                                    Linux distribution with everything else floating on top. NixOS hosting Arch,
                                    CentOS, Debian, Void, Windows, macOS and more.
                                  </p>
                              </timeline-content>
                            </timeline-item>

                          </section>
                        </column-questions>

                    </column-section>
                </article>

                <br>

                <section id="projects">
                  <h1>Projects</h1>
                </section>

                <br>

                <section>

                  <tile-set>
                      <tile-item>
                        <a href="/projects/personal-portfolio/">
                          <img
                            width="203"
                            height="360"
                            src="/images/personal-portfolio.png"
                            alt="thedro"
                          >
                        </a>
                      </tile-item>

                      <tile-item>
                        <a href="/projects/bulma-resume/">
                          <img
                            width="203"
                            height="360"
                            src="/images/bulma-resume.png"
                            alt="resume"
                          >
                        </a>
                      </tile-item>

                      <tile-item>
                        <a href="/projects/voiceover-website/">
                          <img
                            width="203"
                            height="360"
                            src="/images/voiceover-website.png"
                            alt="edwin"
                          >
                        </a>
                      </tile-item>
                  </tile-set>

                </section>

            </main>

          </column-right>

        </resume-page>

    </body>
</html>
