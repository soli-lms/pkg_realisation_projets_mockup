<li class="nav-item has-treeview">
            <a href="#"
              class="nav-link <?php echo (strpos($current_route, 'Gestion des briefs') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-laptop-code"></i>
            
              <p>
                Réalisation des projets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pkg_validations/Formateur/Realisations/index.php"
                  class="nav-link <?php echo (strpos($current_route, 'Réalisations') !== false) ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-laptop-code"></i>
                  <p>Réalisations</p>
                </a>
              </li>
            </ul>
</li>