# I can't cook anything...

Depending on the mock framework you used you will have seen the tests failing or passing.

<details>
  <summary>Details</summary>
    Prophecy triggers an error when we try to stub a method that doesn't exist on the original object. Mockery doesn't.
    I haven't tested it with Phpunit mock framework. If you do, let me know!
</details>

But there is only one truth, and it's production:

Since the upgrade of the Kulinarisk to the new version the cook is not able to use the oven. He complains that the oven doesn't work as it used to.

>⚙️ Try to order "une tartine" again with ` ./prepareTartineAuPoivron`

> ❓️ Have a look at the [Kulinarisk changelog](./../vendor/akei/kulinarisk/Upgrade.md). What do you notice?

[Next ➡️](./fix-production.md)