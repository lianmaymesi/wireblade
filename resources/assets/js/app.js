import Alpine from 'alpinejs'
import sidebarToggle from './sidebar-toggle'

window.Alpine = Alpine

Alpine.start()

Alpine.data('sidebar-toggle', sidebarToggle)
