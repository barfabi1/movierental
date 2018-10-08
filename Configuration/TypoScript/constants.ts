
plugin.tx_movierental_movierental {
    view {
        # cat=plugin.tx_movierental_movierental/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:movierental/Resources/Private/Templates/
        # cat=plugin.tx_movierental_movierental/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:movierental/Resources/Private/Partials/
        # cat=plugin.tx_movierental_movierental/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:movierental/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_movierental_movierental//a; type=string; label=Default storage PID
        storagePid =
    }
}

module.tx_movierental_movierantalmodule {
    view {
        # cat=module.tx_movierental_movierantalmodule/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:movierental/Resources/Private/Backend/Templates/
        # cat=module.tx_movierental_movierantalmodule/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:movierental/Resources/Private/Backend/Partials/
        # cat=module.tx_movierental_movierantalmodule/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:movierental/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_movierental_movierantalmodule//a; type=string; label=Default storage PID
        storagePid =
    }
}
