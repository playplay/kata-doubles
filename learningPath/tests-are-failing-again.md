# Tests are failing again

The needed change was to use the `bake` method instead of the `laga` one. We had to do it only in one place!

We've "made the change easy and then we've made the easy change."

But, even after adapting the adapter to the new version of the Kulinarisk by calling the `bake` method instead of `laga` the tests are still not passing. It's a different error. The new version of the Kulinarisk doesn't seem to heat our dish. That's unfortunate...

> 💡 Our integration test(s) tell(s) us that our system is not working and that we shouldn't push that code to production!
> Using only mocks we would not have been able to learn that AKEI new Kulinarisk suffers from a bug.

[Next ➡️](./upgrade-to-v2.1.md)