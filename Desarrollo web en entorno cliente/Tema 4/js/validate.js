export class Validate {
  text(string) {
    return /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/.test(
      string
    );
  }
  age(number) {
    return /^(1[8-9])$|^([2-5][0-9])$|^(6[0-7])$/.test(number);
  }
  pass(string) {
    return /^[aeiou](?!.select)(?=.[13579])(?=.[$&@#])(?=.[A-Z]).{5,12}$/.test(
      string
    );
  }
}
