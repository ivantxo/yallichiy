<div class="adminContent">
  <div id="admin_requests" class="adminColumn">
      <?php if (!empty($attributes['requests'])): ?>
          <?php foreach ($attributes['requests'] as $request): ?>
            <div class="request adminBox" id="request_<?= $request->id; ?>" data-id="<?= $request->id; ?>">
              <b><?php echo "Type: "; ?></b><label><?php echo $request->type; ?></label><br/>
              <b><?php echo "Source: "; ?></b><label><?php echo ucfirst($request->source_language); ?></label><br/>
              <b><?php echo "Target: "; ?></b><label><?php echo ucfirst($request->target_language); ?></label><br/>
              <b><?php echo "Client: "; ?></b><label><?php echo $request->name . ' ' . $request->surname; ?></label><br/>
              <b><?php echo "Phone: "; ?></b><label><?php echo $request->phone; ?></label><br/>
              <b><?php echo "Email: : "; ?></b><label><?php echo $request->email; ?></label><br/>
              <b><?php echo "Requested: "; ?></b><label><?php echo $request->created; ?></label>
            </div>
            <br/><br/>
          <?php endforeach; ?>
          <?php foreach ($attributes['requests'] as $request): ?>
            <div class="request adminBox" id="request2_<?= $request->id; ?>" data-id="<?= $request->id; ?>">
              <b><?php echo "Type: "; ?></b><label><?php echo $request->type; ?></label><br/>
              <b><?php echo "Source: "; ?></b><label><?php echo ucfirst($request->source_language); ?></label><br/>
              <b><?php echo "Target: "; ?></b><label><?php echo ucfirst($request->target_language); ?></label><br/>
              <b><?php echo "Client: "; ?></b><label><?php echo $request->name . ' ' . $request->surname; ?></label><br/>
              <b><?php echo "Phone: "; ?></b><label><?php echo $request->phone; ?></label><br/>
              <b><?php echo "Email: : "; ?></b><label><?php echo $request->email; ?></label><br/>
              <b><?php echo "Requested: "; ?></b><label><?php echo $request->created; ?></label>
            </div>
            <br/><br/>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>

  <div id="admin_translators" class="adminColumn">
      <?php if (!empty($attributes['translators'])): ?>
          <?php foreach ($attributes['translators'] as $translator): ?>
            <div class="translator adminBox" id="translator_<?= $translator->id?>" data-id="<?= $translator->id; ?>">
              <b><?php echo "Name: "; ?></b><label><?php echo $translator->name . ' ' . $translator->surname; ?></label><br/>
              <b><?php echo "Phone: "; ?></b><label><?php echo $translator->phone; ?></label><br/>
              <b><?php echo "Email: : "; ?></b><label><?php echo $translator->email; ?></label><br/>
              <b><?php echo "Skills: "; ?></b><?php echo implode("<br/>", array_map('ucwords', $translator->skills)); ?>
            </div>
          <br/>
          <?php endforeach; ?>
          <?php foreach ($attributes['translators'] as $translator): ?>
            <div class="translator adminBox" id="translator2_<?= $translator->id?>" data-id="<?= $translator->id; ?>">
              <b><?php echo "Name: "; ?></b><label><?php echo $translator->name . ' ' . $translator->surname; ?></label><br/>
              <b><?php echo "Phone: "; ?></b><label><?php echo $translator->phone; ?></label><br/>
              <b><?php echo "Email: : "; ?></b><label><?php echo $translator->email; ?></label><br/>
              <b><?php echo "Skills: "; ?></b><?php echo implode("<br/>", array_map('ucwords', $translator->skills)); ?>
            </div>
          <br/>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>
</div>

<br/><br/><br/>
<div id="admin_confirm_requests">
  <div>
    <div class="adminConfirmBox">
      <div id="admin_confirm_request"></div>
      <div id="admin_confirm_translator"></div>
    </div>
    <div id="admin_confirm_actions" class="adminConfirmActions">
      <button id="admin_clear_selection" value="Cancel">Cancel</button>
      <button id="admin_confirm_selection" value="Confirm">Confirm</button>
    </div>
  </div>
</div>
