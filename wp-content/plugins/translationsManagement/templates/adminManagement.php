<div style="column-count: 2;">
  <div id="admin_requests" style="height: 300px; overflow: auto;">
      <?php if (!empty($attributes['requests'])): ?>
          <?php foreach ($attributes['requests'] as $request): ?>
            <div class="request" data-id="request_<?= $request->id; ?>" style="border: 2px groove #5f97a8;">
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
            <div class="request" data-id="request_<?= $request->id; ?>" style="border: 2px groove #5f97a8;">
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

  <div id="admin_translators" style="height: 300px; overflow: auto;">
      <?php if (!empty($attributes['translators'])): ?>
          <?php foreach ($attributes['translators'] as $translator): ?>
            <div class="translator" data-id="translator_<?= $translator->id?>" style="border: 2px groove #5f97a8;">
              <b><?php echo "Name: "; ?></b><label><?php echo $translator->name . ' ' . $translator->surname; ?></label><br/>
              <b><?php echo "Phone: "; ?></b><label><?php echo $translator->phone; ?></label><br/>
              <b><?php echo "Email: : "; ?></b><label><?php echo $translator->email; ?></label><br/>
              <b><?php echo "Skills: "; ?></b><?php echo implode("<br/>", array_map('ucwords', $translator->skills)); ?>
            </div>
          <br/>
          <?php endforeach; ?>
          <?php foreach ($attributes['translators'] as $translator): ?>
            <div class="translator" data-id="translator2_<?= $translator->id?>" style="border: 2px groove #5f97a8;">
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
