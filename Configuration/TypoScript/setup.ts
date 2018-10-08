
plugin.tx_movierental_movierental {
    view {
        templateRootPaths.0 = EXT:movierental/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_movierental_movierental.view.templateRootPath}
        partialRootPaths.0 = EXT:movierental/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_movierental_movierental.view.partialRootPath}
        layoutRootPaths.0 = EXT:movierental/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_movierental_movierental.view.layoutRootPath}
    }
    persistence {
        #storagePid = {$plugin.tx_movierental_movierental.persistence.storagePid}
        storagePid = 7,37
        recursive = 1
        classes {
            ACME\Movierental\Domain\Model\Movie {
                newRecordStoragePid = 37
            }
            ACME\Movierental\Domain\Model\Director {
                newRecordStoragePid = 40
            }
            ACME\Movierental\Domain\Model\Genre {
                newRecordStoragePid = 39
            }
            ACME\Movierental\Domain\Model\Director {
                newRecordStoragePid = 40
            }
            ACME\Movierental\Domain\Model\Studio {
                newRecordStoragePid = 41
            }
        }
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    settings{
        movies.max = 7
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_movierental._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-movierental table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-movierental table th {
        font-weight:bold;
    }

    .tx-movierental table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }

    .layout1 {
        background-color: #eee;
        padding: 10px;
        margin: 5px;
        border: 1px solid grey;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }
)

# Module configuration
module.tx_movierental_web_movierentalmovierantalmodule {
    persistence {
        storagePid = {$module.tx_movierental_movierantalmodule.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:movierental/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_movierental_movierantalmodule.view.templateRootPath}
        partialRootPaths.0 = EXT:movierental/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_movierental_movierantalmodule.view.partialRootPath}
        layoutRootPaths.0 = EXT:movierental/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_movierental_movierantalmodule.view.layoutRootPath}
    }
}
