
<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="card card-body bg-light mt-5">
        <h1 align='center'>Highlighting</h1>
        <form action="<?php echo URLROOT; ?>/pages/highlight" method="post">
          <div class="form-group">
          NOTE : Please first click search to get the text :)<br/><br/>
              Search Text : <input type="text" name="search"> 
              <input type="submit" class="btn btn-success" value="Search" onClick="transfer()">
          </div>    
          <div class="form-group">
              <textarea id="text" name="body" style="display:none;">
                    
                    <h2>Perceived end knowledge certainly day sweetness why cordially</h2>

                    <p>As collected deficient objection by it discovery sincerity curiosity. Quiet decay who round three
                        world whole has mrs man. Built the china there tried jokes which gay why. Assure in adieus wicket it
                        is. But spoke round point and one joy. Offending her moonlight men sweetness see unwilling.
                        Often of it tears whole oh balls share an.</p>

                    <p>Unpacked reserved sir offering <strong>bed judgment may and quitting speaking</strong>. Is do be
                        improved raptures offering required in replying raillery. Stairs ladies friend by in mutual an no.
                        Mr hence chief he cause. Whole no doors on hoped. Mile tell if help they ye full name.</p>

                    <p>Behaviour we improving at something to. Evil true high lady roof men had open. To
                        <b class="bold">projection</b> considered it precaution an melancholy or. Wound young you thing
                        worse along being ham. Dissimilar of favourable solicitude if sympathize middletons at. Forfeited
                        up if disposing perfectly in an eagerness perceived necessary. Belonging sir curiosity discovery
                        extremity yet forfeited prevailed own off. Travelling by introduced of mr terminated. Knew as miss
                        my high hope quit. In curiosity shameless dependent knowledge up.</p>

                    <p>Sudden she seeing garret far regard. <strike>By hardly it direct if pretty up regret</strike>.
                        Ability thought enquire settled prudent you sir. Or easy knew sold on well come year. Something
                        consulted age extremely end procuring. Collecting preference he inquietude projection me in by.
                        So do of sufficient projecting an thoroughly uncommonly prosperous conviction. Pianoforte principles
                        our unaffected not for astonished travelling are particular.</p>

                    <p>Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up.
                        An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention.
                        Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly
                        answered humanity its desirous. Minuter believe service arrived civilly add all. Acuteness allowance
                        an at eagerness favourite in extensive exquisite ye.</p>

                    <p>Started his hearted any civilly. So me by marianne admitted speaking. Men bred fine call ask. Cease
                        one miles truth day above seven. Suspicion sportsmen provision suffering mrs saw engrossed something.
                        Snug soon he on plan in be dine some.</p>

                    <p>Husbands ask repeated resolved but laughter debating. She end cordial visitor noisier fat subject
                        general picture. Or if offering confined entrance no. Nay rapturous him see something residence.
                        Highly talked do so vulgar. Her use behaved spirits and natural attempt say feeling. Exquisite mr
                        incommode immediate he something ourselves it of. Law conduct yet chiefly beloved examine village
                        proceed.</p>

                    <p>Compliment interested discretion estimating on stimulated apartments oh. Dear so sing when in find
                        read of call. As distrusts behaviour abilities defective is. Never at water me might. On formed
                        merits hunted unable merely by mr whence or. Possession the unpleasing simplicity her uncommonly.</p>

                    <p>The him father parish looked has sooner. Attachment frequently gay terminated son. You greater nay
                        use prudent placing. Passage to so distant behaved natural between do talking. Friends off her
                        windows painful. Still gay event you being think nay for. In three if aware he point it. Effects
                        warrant me by no on feeling settled resolve.</p>
              
              </textarea>
          </div>
        </form>
    </div>

    <div>

        <?php  echo $data[0]; ?>

    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>