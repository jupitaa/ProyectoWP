<?php get_header(); ?> <!-- Incluye el encabezado del tema -->

<!-- Contenido principal centrado horizontal y verticalmente -->
<div class="main-content d-flex align-items-center justify-content-center">
    <div class="content-wrapper"> <!-- Contenedor principal del contenido -->
        <?php while (have_posts()) : the_post(); ?> <!-- Inicio del bucle de WordPress para obtener y mostrar cada entrada -->
            <div class="post-header mb-4 text-center">
                <h1 class="display-4"><?php the_title(); ?></h1> <!-- Título principal de la entrada -->
            </div>

            <div class="entrada1">
                <div class="entrada-nombre">
                    <h2 class="h4"><strong>Nombre del Proyecto</strong></h2>
                    <p><?php the_field('nombre_del_proyecto'); ?></p> <!-- Campo personalizado de ACF para el nombre del proyecto -->
                </div>

                <div class="project-image mb-4 text-center">
                    <?php
                    $imagen_del_proyecto = get_field('imagen_del_proyecto'); // Obtiene el campo de la imagen del proyecto
                    if ($imagen_del_proyecto) :
                    ?>
                        <img src="<?php echo esc_url($imagen_del_proyecto['url']); ?>" alt="<?php echo esc_attr($imagen_del_proyecto['alt']); ?>" class="img-fluid rounded-circle" />
                        <!-- Muestra la imagen del proyecto con clase img-fluid para hacerla responsive y rounded-circle para bordes redondeados -->
                    <?php endif; ?>
                </div>

                <div class="entrada2">
                    <h3 class="entrada-descripcion"><strong>Descripción del Proyecto</strong></h3>
                    <p><?php the_field('descripcion_del_proyecto'); ?></p> <!-- Campo personalizado de ACF para la descripción del proyecto -->
                </div>
            </div>

            <div class="post-content mb-4">
                <p><?php the_content(); ?></p> <!-- Contenido principal de la entrada -->
            </div>
        <?php endwhile; ?> <!-- Fin del bucle de WordPress -->
    </div>
</div>

<?php get_footer(); ?> <!-- Incluye el pie de página del tema -->
