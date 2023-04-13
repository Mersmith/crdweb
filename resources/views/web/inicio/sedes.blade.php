<!--CENTRAR ELEMENTOS-->
<div class="centrar_elementos" x-data>
    <div class="contenedor_item_informacion" x-data="{ activarTab: 0 }">
        <!--TÍTULO-->
        <div class="titulo_servicios">
            <h2>Nuestras sedes</h2>
        </div>

        <!--BOTONES-->
        <div class="contenedor_botones_tab">
            <button @click="activarTab = 0"
                x-bind:style="{
                    backgroundColor: activarTab === 0 ? '#189bb6' : '#f0f0f0',
                    color: activarTab === 0 ? 'white' : 'black'
                }">Miraflores</button>
            <button @click="activarTab = 1"
                x-bind:style="{
                    backgroundColor: activarTab === 1 ? '#189bb6' : '#f0f0f0',
                    color: activarTab === 1 ? 'white' : 'black'
                }">La
                Molina</button>
            <button @click="activarTab = 2"
                x-bind:style="{
                    backgroundColor: activarTab === 2 ? '#189bb6' : '#f0f0f0',
                    color: activarTab === 2 ? 'white' : 'black'
                }">San
                Juan de Lurigancho</button>
            <button @click="activarTab = 3"
                x-bind:style="{
                    backgroundColor: activarTab === 3 ? '#189bb6' : '#f0f0f0',
                    color: activarTab === 3 ? 'white' : 'black'
                }">Los
                Olivos</button>
            <button @click="activarTab = 4"
                x-bind:style="{
                    backgroundColor: activarTab === 4 ? '#189bb6' : '#f0f0f0',
                    color: activarTab === 4 ? 'white' : 'black'
                }">San
                Isidros</button>
        </div>

        <!--MIRAFLORES-->
        <div :class="{ 'activo': activarTab === 0 }" x-show.transition.in.opacity.duration.600="activarTab === 0">
            <div class="contenedor_parrafo_video">
                <!--HORARIO-->
                <div class="horario_informacion">
                    <h3 class="titulo_horario">Horario de Atención:</h3>
                    <p><strong>Lunes -Viernes:</strong> 9:00 am a 20:00 pm</p>
                    <p><strong>Sábado:</strong> 9:00 am a 19:00 pm</p>
                    <p><strong>Teléfono:</strong> 01 245-1141</p>
                    <p><strong>Dirección:</strong> Av. José Pardo N° 138 Piso 3 Of. 306</p>
                    <p><strong>Referencia:</strong> Edificio Neptuno
                        Al costado de Saga Falabella</p>
                    <p><strong>Correo:</strong> miraflores@centroradiologico.com.pe</p>

                    <a href="//www.google.com" class="whatsapp_boton"> <i class="fa-brands fa-whatsapp"></i> Comunícate
                        con
                        nosotros</a>
                </div>

                <!--VIDEO-->
                <div class="video_informacion">
                    <video controls="" autoplay="" muted="" loop="">
                        <source src="{{ asset('videos/video-1.mp4') }}">
                    </video>
                </div>
            </div>

            <!--MAPA-->
            <div class="contenedor_mapa_sede">
                <h3 class="titulo_horario">Nuestra dirección:</h3>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d720815.078304992!2d-80.9492742135048!3d-3.592437273089929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9033f3662874b48d%3A0x86a8e7d32ad3ea79!2sC.%20Hilario%20Carrasco%20422%2C%20Corrales%2024501!5e0!3m2!1ses-419!2spe!4v1672753232159!5m2!1ses-419!2spe"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>

        <!--LA MOLINA-->
        <div :class="{ 'activo': activarTab === 1 }" x-show.transition.in.opacity.duration.600="activarTab === 1">
            <div class="contenedor_parrafo_video">
                <!--HORARIO-->
                <div class="horario_informacion">
                    <h3 class="titulo_horario">Horario de Atención:</h3>
                    <p><strong>Lunes -Viernes:</strong> 9:00 am a 20:00 pm</p>
                    <p><strong>Sábado:</strong> 9:00 am a 19:00 pm</p>
                    <p><strong>Teléfono:</strong> 01 443-4319</p>
                    <p><strong>Dirección:</strong> Av. Javier Prado N° 5250 Piso 2 Of. 205</p>
                    <p><strong>Referencia:</strong> Centro Comercial La Fontana
                        Av. Javier Prado con Los Frutales</p>
                    <p><strong>Correo:</strong> lamolina@centroradiologico.com.pe</p>

                    <a href="//www.google.com" class="whatsapp_boton"> <i class="fa-brands fa-whatsapp"></i> Comunícate
                        con
                        nosotros</a>
                </div>

                <!--VIDEO-->
                <div class="video_informacion">
                    <video controls="" autoplay="" muted="" loop="">
                        <source src="{{ asset('videos/video-1.mp4') }}">
                    </video>
                </div>
            </div>

            <!--MAPA-->
            <div class="contenedor_mapa_sede">
                <h3 class="titulo_horario">Nuestra dirección:</h3>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d720815.078304992!2d-80.9492742135048!3d-3.592437273089929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9033f3662874b48d%3A0x86a8e7d32ad3ea79!2sC.%20Hilario%20Carrasco%20422%2C%20Corrales%2024501!5e0!3m2!1ses-419!2spe!4v1672753232159!5m2!1ses-419!2spe"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>

        <!--SAN JUAN DE LURIGANCHO-->
        <div :class="{ 'activo': activarTab === 2 }" x-show.transition.in.opacity.duration.600="activarTab === 2">
            <div class="contenedor_parrafo_video">
                <!--HORARIO-->
                <div class="horario_informacion">
                    <h3 class="titulo_horario">Horario de Atención:</h3>
                    <p><strong>Lunes -Viernes:</strong> 9:00 am a 20:00 pm</p>
                    <p><strong>Sábado:</strong> 9:00 am a 19:00 pm</p>
                    <p><strong>Teléfono:</strong> 01 651-0256</p>
                    <p><strong>Dirección:</strong> Av. Gran Chimu N° 681 Piso 3 Of. 30</p>
                    <p><strong>Referencia:</strong> Frente al Casino Mambo</p>
                    <p><strong>Correo:</strong> sjl@centroradiologico.com.pe</p>

                    <a href="//www.google.com" class="whatsapp_boton"> <i class="fa-brands fa-whatsapp"></i> Comunícate
                        con
                        nosotros</a>
                </div>

                <!--VIDEO-->
                <div class="video_informacion">
                    <video controls="" autoplay="" muted="" loop="">
                        <source src="{{ asset('videos/video-1.mp4') }}">
                    </video>
                </div>
            </div>

            <!--MAPA-->
            <div class="contenedor_mapa_sede">
                <h3 class="titulo_horario">Nuestra dirección:</h3>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d720815.078304992!2d-80.9492742135048!3d-3.592437273089929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9033f3662874b48d%3A0x86a8e7d32ad3ea79!2sC.%20Hilario%20Carrasco%20422%2C%20Corrales%2024501!5e0!3m2!1ses-419!2spe!4v1672753232159!5m2!1ses-419!2spe"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>

        <!--LOS OLIVOS-->
        <div :class="{ 'activo': activarTab === 3 }" x-show.transition.in.opacity.duration.600="activarTab === 3">
            <div class="contenedor_parrafo_video">
                <!--HORARIO-->
                <div class="horario_informacion">
                    <h3 class="titulo_horario">Horario de Atención:</h3>
                    <p><strong>Lunes -Viernes:</strong> 9:00 am a 20:00 pm</p>
                    <p><strong>Sábado:</strong> 9:00 am a 19:00 pm</p>
                    <p><strong>Teléfono:</strong> 01 682-3694</p>
                    <p><strong>Dirección:</strong> Av Antúnez de Mayolo 1290 Piso 2 Of 202</p>
                    <p><strong>Referencia:</strong> Altura Cdra.13 Antunez de Mayolo</p>
                    <p><strong>Correo:</strong> losolivos@centroradiologico.com.pe</p>

                    <a href="//www.google.com" class="whatsapp_boton"> <i class="fa-brands fa-whatsapp"></i> Comunícate
                        con
                        nosotros</a>
                </div>

                <!--VIDEO-->
                <div class="video_informacion">
                    <video controls="" autoplay="" muted="" loop="">
                        <source src="{{ asset('videos/video-1.mp4') }}">
                    </video>
                </div>
            </div>

            <!--MAPA-->
            <div class="contenedor_mapa_sede">
                <h3 class="titulo_horario">Nuestra dirección:</h3>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d720815.078304992!2d-80.9492742135048!3d-3.592437273089929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9033f3662874b48d%3A0x86a8e7d32ad3ea79!2sC.%20Hilario%20Carrasco%20422%2C%20Corrales%2024501!5e0!3m2!1ses-419!2spe!4v1672753232159!5m2!1ses-419!2spe"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>

        <!--SAN ISIDRO-->
        <div :class="{ 'activo': activarTab === 4 }" x-show.transition.in.opacity.duration.600="activarTab === 4">
            <div class="contenedor_parrafo_video">
                <!--HORARIO-->
                <div class="horario_informacion">
                    <h3 class="titulo_horario">Horario de Atención:</h3>
                    <p><strong>Lunes -Viernes:</strong> 9:00 am a 20:00 pm</p>
                    <p><strong>Sábado:</strong> 9:00 am a 19:00 pm</p>
                    <p><strong>Teléfono:</strong> 01 733-3340</p>
                    <p><strong>Dirección:</strong> Av. Rivera Navarrete 765 Piso 4 Of. 41</p>
                    <p><strong>Referencia:</strong> Al lado del Banco Interbank</p>
                    <p><strong>Correo:</strong> losolivos@centroradiologico.com.pe</p>

                    <a href="//www.google.com" class="whatsapp_boton"> <i class="fa-brands fa-whatsapp"></i> Comunícate
                        con
                        nosotros</a>
                </div>

                <!--VIDEO-->
                <div class="video_informacion">
                    <video controls="" autoplay="" muted="" loop="">
                        <source src="{{ asset('videos/video-1.mp4') }}">
                    </video>
                </div>
            </div>

            <!--MAPA-->
            <div class="contenedor_mapa_sede">
                <h3 class="titulo_horario">Nuestra dirección:</h3>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d720815.078304992!2d-80.9492742135048!3d-3.592437273089929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9033f3662874b48d%3A0x86a8e7d32ad3ea79!2sC.%20Hilario%20Carrasco%20422%2C%20Corrales%2024501!5e0!3m2!1ses-419!2spe!4v1672753232159!5m2!1ses-419!2spe"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>
</div>
