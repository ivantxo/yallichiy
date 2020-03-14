<div id="admin_requests">
    <?php if (!empty($attributes['requests'])): ?>
      <?php foreach ($attributes['requests'] as $request): ?>
        <div>
          <label><?php echo $request->type; ?></label><br>
          <label><?php echo $request->source_language; ?></label><br>
          <label><?php echo $request->target_language; ?></label><br>
          <label><?php echo $request->name; ?></label><br>
          <label><?php echo $request->surname; ?></label><br>
          <label><?php echo $request->phone; ?></label><br>
          <label><?php echo $request->email; ?></label><br>
          <label><?php echo $request->created; ?></label><br><br>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
</div>
