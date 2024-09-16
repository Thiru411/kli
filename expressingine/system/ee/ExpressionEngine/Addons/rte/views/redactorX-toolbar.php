<div class="rte-toolbar" id="redactorX-toolbar-<?=$type?>">
    <div id="tb-selections-redactorX-<?=$type?>">
        <div class="form-standard">
            <div class="rx-toolbar cke_toolbox">
                <?php foreach ($buttons as $button => $label): ?>
                    <?php
                        $lc_class = str_replace(':', '', strtolower($button));
                        $id = 'tb-option-' . $lc_class;
                        $svg = '';
                        switch ($lc_class) {
                            case 'blockcode':
                                $icon_class = 'html';
                                break;
                            case 'filebrowser': 
                                $icon_class = 'image';
                                break;
                            case 'textdirection':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m3.8 8.10002943c.12590292.09442719.2.24262134.2.4v1.49999997h9c.5522847 0 1 .4477153 1 1 0 .5128359-.3860402.9355072-.8833789.9932723l-.1166211.0067277h-9v1.5c0 .2761424-.22385763.5-.5.5-.15737865 0-.30557281-.0740971-.4-.2l-1.875-2.5c-.13333333-.1777778-.13333333-.4222222 0-.6l1.875-2.49999997c.16568542-.2209139.4790861-.26568543.7-.1zm7.4-6c.2209139-.16568543.5343146-.1209139.7.1l1.875 2.5c.1333333.17777777.1333333.42222222 0 .6l-1.875 2.5c-.0944272.12590292-.2426213.2-.4.2-.2761424 0-.5-.22385763-.5-.5v-1.5h-9c-.55228475 0-1-.44771525-1-1 0-.51283584.38604019-.93550716.88337887-.99327227l.11662113-.00672773 8.999-.00002943.001-1.49997057c0-.12590293.0474221-.24592777.1308533-.33724831z"/></svg>';
                                break;
                            case 'specialchars': 
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m2 14v-1.8348348h2.38016529v-.0780781c-.99173554-.975976-2.10247934-2.67417419-2.10247934-4.99699701 0-3.57207207 2.28099174-6.09009009 5.73223141-6.09009009 3.43140494 0 5.71239664 2.51801802 5.71239664 6.09009009 0 2.32282282-1.1107438 4.02102101-2.1024793 4.99699701v.0780781h2.3801653v1.8348348h-4.95867769v-1.6396396c1.40826449-1.1906907 2.32066119-2.75225229 2.32066119-5.07507511 0-2.4984985-1.2495868-4.31381382-3.35206614-4.31381382s-3.37190083 1.81531532-3.37190083 4.31381382c0 2.32282282.91239669 3.88438441 2.32066116 5.07507511v1.6396396z"></path></svg>';
                                break;
                            case 'selector':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m10.6663083 2.14369002c.5071647.07664087.8669828.53941479.8491564 1.06286535l-.0109223.12172524-.2435424 1.67154209 1.239.0001773c.5522847 0 1 .44771525 1 1 0 .51283584-.3860402.93550716-.8833789.99327227l-.1166211.00672773-1.531-.0001773-.291 2 1.322.0001773c.5522847 0 1 .44771525 1 1 0 .5128358-.3860402.9355072-.8833789.9932723l-.1166211.0067277-1.613-.0001773-.3121956 2.1487091c-.08323349.571695-.59347185.9682364-1.13964926.8857001-.50716474-.0766409-.86698283-.5394148-.84915642-1.0628653l.01092235-.1217253.26807893-1.8498186h-1.978l-.31219557 2.1487091c-.08323352.571695-.59347188.9682364-1.13964929.8857001-.50716474-.0766409-.86698283-.5394148-.84915642-1.0628653l.01092235-.1217253.26807893-1.8498186-1.365.0001773c-.55228475 0-1-.4477153-1-1 0-.51283584.38604019-.93550716.88337887-.99327227l.11662113-.00672773 1.656-.0001773.292-2-1.448.0001773c-.55228475 0-1-.44771525-1-1 0-.51283584.38604019-.93550716.88337887-.99327227l.11662113-.00672773 1.739-.0001773.28765901-1.97043255c.08323352-.571695.59347189-.96823646 1.1396493-.88570013.50716473.07664087.86698282.53941479.84915642 1.06286535l-.01092236.12172524-.24354237 1.67154209h1.978l.28765901-1.97043255c.08323352-.571695.59347189-.96823646 1.13964929-.88570013zm-2.0103083 6.85613268.292-2h-1.979l-.291 2z"></path></svg>';
                                break;
                            case 'rte_definedlinks':
                                $svg = '<svg height="16" width="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="m11 1c2.209139 0 4 1.790861 4 4s-1.790861 4-4 4c-.7656675 0-1.48108924-.21512764-2.08911866-.58823636-.0308598.0700602-.07139598.13787279-.12058595.2011358l-.08318861.09420734-.26034513.261909c.35153112.59529459.55323835 1.28958382.55323835 2.03098422 0 2.209139-1.790861 4-4 4s-4-1.790861-4-4 1.790861-4 4-4c.74181883 0 1.43647323.20193496 2.03199196.55383363l.26090126-.26094041c.08817393-.08817393.18871724-.15643965.29604433-.20479715-.37380991-.60700683-.58893755-1.32242858-.58893755-2.08809607 0-2.209139 1.790861-4 4-4zm-6 8c-1.1045695 0-2 .8954305-2 2s.8954305 2 2 2 2-.8954305 2-2-.8954305-2-2-2zm6-6c-1.1045695 0-2 .8954305-2 2s.8954305 2 2 2 2-.8954305 2-2-.8954305-2-2-2z"></path></svg>';
                                break;
                            case 'counter':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m7.46693122 8.39108696c.67791005 0 1.31283068.24347826 1.79232804.68326087.47784391.4397826.74074074 1.02565217.74074074 1.64804347 0 .623913-.26289683 1.2082609-.74074074 1.6495652l-.87136243.8019565h.62003968c.5489418 0 .99206349.4093479.99206349.9130435 0 .5036957-.44312169.9130435-.99206349.9130435h-3.01587302c-.09755291 0-.19345238-.0136957-.28273809-.0380435-.02810847-.0076087-.05621693-.0167391-.08267196-.0258695-.00330688-.0015218-.00661376-.0030435-.00992064-.0030435l-.08597883-.0380435c-.02314815-.0106522-.0462963-.0228261-.06944445-.0380435-.06283068-.035-.11904762-.0776087-.17030423-.1247826-.02314815-.0213043-.04464286-.0426087-.06448413-.063913-.01984127-.0228261-.03968254-.0471739-.05621693-.07s-.03306878-.0456522-.04794973-.07c-.01984127-.0334783-.0380291-.07-.05291006-.105-.01157407-.0243479-.0214947-.0502174-.02810846-.076087-.02645503-.0836956-.04133598-.1704348-.04133598-.2602174s.01488095-.1765217.04133598-.2602174c.00661376-.0258695.01653439-.0517391.02810846-.0760869.01488096-.035.03306879-.0715218.05291006-.105.01488095-.0243479.03141534-.0471739.04794973-.07s.03637566-.0471739.05621693-.07c.01984127-.0213044.04133598-.0426087.06448413-.0639131l2.56448413-2.3617391c.10416666-.0958696.1603836-.2221739.1603836-.3576087 0-.133913-.05621694-.2617391-.1603836-.356087-.20833334-.1917391-.56878307-.1917391-.7771164 0l-.34226191.315c-.38690476.356087-1.01521164.356087-1.4021164 0-.3885582-.3576086-.3885582-.93586952 0-1.29195647l.3422619-.315c.47784392-.43978261 1.11441799-.68326087 1.79067461-.68326087zm.42328042-7.39108696c.02810847 0 .05787037.00152174.0843254.00456522.03472222.00152174.06944444.00608695.10085979.01217391.01157407.00152174.02480158.00456522.03637566.0076087.01818783.00304347.03472222.00608695.05291005.01217391.03141534.00760869.06283069.01826087.09259259.02891304l.05787037.02434783.05621693.02586956c.0925926.04717392.17857143.10956522.25132276.18413044.01488095.01369565.0297619.03043478.04298941.04565217.02810847.03195652.05291006.06543479.0760582.10195652.00992064.01673913.01984127.03195653.02976191.04869566.00330688.00760869.00661376.01369565.00992063.01978261.01322752.02586956.02645503.05173913.03637567.07913043.00496031.01065217.00826719.02130435.01322751.03195652l.01488095.04565218c0 .00152173.00165344.00456521 0 .00608695.00992064.02891305.01653439.05782609.02149471.08673913.00496032.02130435.00661376.04108696.0082672.06239131.00330687.0273913.00496031.05630434.00496031.08521739v4.36434782c0 .50369566-.44312169.91304348-.99206349.91304348-.54728836 0-.99206349-.40934782-.99206349-.91304348v-2.76347826c-.14054233.06391305-.29100529.09434783-.43816138.09434783-.33895502 0-.66798941-.15978261-.8531746-.4473913-.28108466-.43369566-.12566138-.99369566.34556878-1.25086957l1.43187831-.78217391c.0082672-.00456522.01818783-.00913044.02645503-.01369566.00496031-.00304347.00992063-.00608695.01488095-.00760869l.05787037-.02586957c.01157407-.00608695.02480159-.01065217.0380291-.01521739.02314815-.00913043.04794974-.01673913.07275132-.02434782.02149471-.00608696.04133598-.01065218.06117725-.01369566.01322751-.00456521.02645503-.00760869.03968254-.00913043.0082672-.00152174.01653439-.00304348.02480159-.00456522.02149471-.00304348.04298942-.00608695.06448413-.00913043h.00992063c.03141534-.00304348.06283069-.00456522.09424603-.00456522z"></path></svg>';
                                break;
                            case 'readmore':
                                $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="width: 68%"><path d="M3.598.687h1.5v5h-1.5zm14.5 0h1.5v5h-1.5z"></path><path d="M19.598 4.187v1.5h-16v-1.5zm-16 14.569h1.5v-5h-1.5zm14.5 0h1.5v-5h-1.5z"></path><path d="M19.598 15.256v-1.5h-16v1.5zM5.081 9h6v2h-6zm8 0h6v2h-6zm-9.483 1L0 12.5v-5z"></path></svg>';
                                break;
                            case 'removeformat':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m8 11c.51283584 0 .93550716.3860402.99327227.8833789l.00672773.1166211v1c0 .5522847-.44771525 1-1 1-.51283584 0-.93550716-.3860402-.99327227-.8833789l-.00672773-.1166211v-1c0-.5522847.44771525-1 1-1zm-4.60436072-5.91850958.10436072.05248418 9.5262794 5.5c.4782927.2761424.6421678.8877328.3660254 1.3660254-.2564179.4441289-.8020741.6171529-1.2616646.4185096l-.1043608-.0524842-9.5262794-5.5c-.47829262-.27614237-.64216778-.88773278-.3660254-1.3660254.25641792-.44412886.80207419-.61715287 1.26166468-.41850958zm9.60436072-3.08149042c.5522847 0 1 .44771525 1 1 0 .51283584-.3860402.93550716-.8833789.99327227l-.1166211.00672773h-4.00016698l.00016698 2c0 .55228475-.44771525 1-1 1-.51283584 0-.93550716-.38604019-.99327227-.88337887l-.00672773-.11662113-.00016698-2h-3.99983302c-.55228475 0-1-.44771525-1-1 0-.51283584.38604019-.93550716.88337887-.99327227l.11662113-.00672773z"></path></svg>';
                                break;
                            case 'imageresize':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m3.75735931 6.58578644c-.39052429.39052429-1.02368927.39052429-1.41421356 0s-.39052429-1.02368927 0-1.41421356l2.82842713-2.82842713c.39052429-.39052429 1.02368927-.39052429 1.41421356 0s.39052429 1.02368927 0 1.41421356l-.70710678.70710678 5.65685424 5.65685421.7071068-.70710674c.3905243-.39052429 1.0236893-.39052429 1.4142135 0 .3905243.39052429.3905243 1.02368924 0 1.41421354l-2.8284271 2.8284271c-.3905243.3905243-1.02368925.3905243-1.41421354 0-.39052429-.3905242-.39052429-1.0236892 0-1.4142135l.70710674-.7071068-5.65685421-5.65685424z" fill-rule="evenodd"></path></svg>';
                                break;
                            case 'imageposition':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m14 12c.5522847 0 1 .4477153 1 1s-.4477153 1-1 1h-12c-.55228475 0-1-.4477153-1-1s.44771525-1 1-1zm0-4c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1h-3c-.5522847 0-1-.44771525-1-1s.4477153-1 1-1zm-6-6c.55228475 0 1 .44771525 1 1v6c0 .55228475-.44771525 1-1 1h-6c-.55228475 0-1-.44771525-1-1v-6c0-.55228475.44771525-1 1-1zm-1 2h-4v4h4zm7 1c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1h-3c-.5522847 0-1-.44771525-1-1s.4477153-1 1-1zm0-3c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1h-3c-.5522847 0-1-.44771525-1-1s.4477153-1 1-1z" fill-rule="evenodd"></path></svg>';
                                break;
                            case 'inlineformat':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m7.39849577 1.20113038c-3.5610278 2.68125517-5.39849577 5.14152807-5.39849577 7.49360646 0 3.50902886 2.59345039 6.30526316 6 6.30526316 3.4065496 0 6-2.7962343 6-6.30526316 0-2.35207839-1.837468-4.81235129-5.39849577-7.49360646-.35616697-.26817384-.84684149-.26817384-1.20300846 0zm.60150423 2.06186962.28200813.22720401c2.50634097 2.04313256 3.71799187 3.80538426 3.71799187 5.20453283 0 2.43669386-1.73306 4.30526316-4 4.30526316-2.26694005 0-4-1.8685693-4-4.30526316 0-1.39914857 1.21165095-3.16140027 3.71799187-5.20453283z"></path></svg>';
                                break;
                            case 'pages':
                                $svg = '<svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="m8 1c3.8659932 0 7 3.13400675 7 7 0 .41562496-.0363345.82696761-.1079778 1.23054987-.004996.04220683-.0132193.08514228-.024399.12800171l-.0016157.01040915c-.0129304.06516346-.0267866.13011227-.0415641.19483161-.0425153.18619829-.134446.34828603-.2587975.47558696-.453219.6877517-1.2540223 1.0606207-2.1002173 1.0606207-.7021902 0-1.3022299-.267223-1.84008-.7870308-.63970759.7277838-1.57889666 1.1870308-2.6253486 1.1870308-1.93299662 0-3.5-1.56700338-3.5-3.5s1.56700338-3.5 3.5-3.5 3.5 1.56700338 3.5 3.5c0 .09852487-.004071.19609891-.0120539.29256309.0832707.05863407.1590104.13364906.2229399.22223279.3278355.45426403.5335836.58520412.7545426.58520412.2433237 0 .4113182-.09466809.4598004-.22373562l-.0506034.24231944c.083034-.36365262.1253744-.73799831.1253744-1.11858382 0-2.76142375-2.2385763-5-5-5-2.76142375 0-5 2.23857625-5 5 0 2.6887547 2.12230671 4.8818181 4.78311038 4.9953805l.21688962.0046195h2c.5522847 0 1 .4477153 1 1 0 .5128358-.3860402.9355072-.8833789.9932723l-.1166211.0067277h-2c-3.86599325 0-7-3.1340068-7-7 0-3.86599325 3.13400675-7 7-7zm0 5.5c-.82842712 0-1.5.67157288-1.5 1.5s.67157288 1.5 1.5 1.5 1.5-.67157288 1.5-1.5-.67157288-1.5-1.5-1.5z"></path></svg>';
                                break;
                            case 'p':
                            case 'ul':
                            case 'ol':
                            case 'h1':
                            case 'h2':
                            case 'h3':
                            case 'h4':
                            case 'h5':
                            case 'h6':
                            case 'address':
                                $svg = '<b>&lt;' . $lc_class . '&gt;</b>';
                                $label = $lc_class;
                                break;
                            case 'specialchars':
                                $icon_class = 'specialcharacters';
                                break;
                            default:
                                $icon_class = $lc_class;
                                break;
                        }
                    ?>
                    <span id="<?php echo $id ?>" class="cke_toolbar tb-option tb-selected">
                        <span class="cke_toolgroup">
                            <a class="rx-button rx-button-target rx-button-toolbar <?php if (in_array($button, $selection) === $reverse) { echo 'disable';} ?>" tabindex="-1" title="<?php echo htmlspecialchars($label) ?>">
                                <span class="rx-button-icon">
                                    <?=(!empty($svg)) ? $svg : '<span class="rx-icon-' . $icon_class .'"></span>'; ?>
                                </span>
                                <input type="hidden" name="settings[redactorX_toolbar][<?=$type?>][]" <?php if (!in_array($button, $selection)) { echo 'disabled'; } ?> value="<?php echo $button ?>">
                            </a>
                        </span>
                    </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>