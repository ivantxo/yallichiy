<div style="column-count: 2;">
  <div id="admin_requests" style="height: 300px; overflow: auto;">
      <?php if (!empty($attributes['requests'])): ?>
          <?php foreach ($attributes['requests'] as $request): ?>
            <div>
              <label><?php echo "Type: " . $request->type; ?></label><br>
              <label><?php echo "Source: " . ucfirst($request->source_language); ?></label><br>
              <label><?php echo "Target: " . ucfirst($request->target_language); ?></label><br>
              <label><?php echo "Client: " . $request->name . ' ' . $request->surname; ?></label><br>
              <label><?php echo "Phone: " . $request->phone; ?></label><br>
              <label><?php echo "Email: : " . $request->email; ?></label><br>
              <label><?php echo "Requested: " . $request->created; ?></label><br><br>
            </div>
          <?php endforeach; ?>
          <?php foreach ($attributes['requests'] as $request): ?>
            <div>
              <label><?php echo "Type: " . $request->type; ?></label><br>
              <label><?php echo "Source: " . ucfirst($request->source_language); ?></label><br>
              <label><?php echo "Target: " . ucfirst($request->target_language); ?></label><br>
              <label><?php echo "Client: " . $request->name . ' ' . $request->surname; ?></label><br>
              <label><?php echo "Phone: " . $request->phone; ?></label><br>
              <label><?php echo "Email: : " . $request->email; ?></label><br>
              <label><?php echo "Requested: " . $request->created; ?></label><br><br>
            </div>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>

  <div id="admin_translators" style="height: 300px; overflow: auto;">
      <?php if (!empty($attributes['translators'])): ?>
          <?php foreach ($attributes['translators'] as $translator): ?>
            <div>
              <label><?php echo "Name: " . $translator->name . ' ' . $translator->surname; ?></label><br>
              <label><?php echo "Phone: " . $translator->phone; ?></label><br>
              <label><?php echo "Email: : " . $translator->email; ?></label><br>
              <label><?php echo "Skill: " . ucfirst($translator->source_language) . ' to ' . ucfirst($translator->target_language); ?></label><br><br>
            </div>
          <?php endforeach; ?>
          <?php foreach ($attributes['translators'] as $translator): ?>
            <div>
              <label><?php echo "Name: " . $translator->name . ' ' . $translator->surname; ?></label><br>
              <label><?php echo "Phone: " . $translator->phone; ?></label><br>
              <label><?php echo "Email: : " . $translator->email; ?></label><br>
              <label><?php echo "Skill: " . ucfirst($translator->source_language) . ' to ' . ucfirst($translator->target_language); ?></label><br><br>
            </div>
          <?php endforeach; ?>
      <?php endif; ?>
  </div>
</div>
